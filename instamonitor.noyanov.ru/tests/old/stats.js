var Stats = function(){
	this.view = {
		rt: $("#follower-count-page"),
		profile: $(".profile-widget"),
		loader: $(".card-loader"),
		form: $("#follower-count"),
		error: $("#follower-count-error")
	};
	this.default_profiles = [
		"selenagomez",
		"justinbieber",
		"arianagrande"
	];

	this.loading = false; 
	this.watching = null;
	this.interval = null;

	this.showLoader = function(){
		this.view.loader.show();
	}
	this.hideLoader = function(){
		this.view.loader.hide();
	}

	this.showError = function(message){
		this.view.error.find("p").text(message);
		this.view.error.show();
	}
	this.hideError = function(){
		this.view.error.hide();
	}

	this.showProfile = function(){
		this.view.profile.show();
	}
	this.hideProfile = function(){
		this.view.profile.hide();
	}

	this.showResults = function(username, profile_picture, total_posts, followers, following){
		this.view.profile.find(".username").text(username);
		this.view.profile.find("img").attr("src", profile_picture);
		this.view.profile.find("#followers-count-followers .value").text(followers);
		this.view.profile.find("#followers-count-photos .value").text(total_posts);
		this.view.profile.find("#followers-count-action").attr("href", "https://instagram.com/" + username);
		this.view.profile.find(".share-url").text("https://blastup.com/stats?" + username);
	}

	this._request = function(username, callback, onerror){
		var posts = new Posts(username);
		posts.fetchPosts(function(){
			callback({
				success: posts.success,
				data: {
					username: posts.username,
					profile_picture: posts.profile_picture,
					total_posts: posts.total_posts,
					followers: posts.followers,
					following: posts.following
				},
			});
		});
		/*$.ajax({
			url: "/instagram/info?username=" + username,
			method: "GET"
		}).done(callback).fail(onerror);*/
	}
	this.request = function(username, opt){
		function requestCallback(data){
			if(opt && opt.change_profile){
				this.loading = false;
			}
			if(data.success){
				this.showResults(
					data.data.username,
					data.data.profile_picture,
					data.data.total_posts,
					data.data.followers,
					data.data.following
				);

				if(opt && opt.change_profile){
					this.watching = data.data.username;
				}
				if(!this.interval){
					this.startInterval();
				}

				this.hideLoader();
				this.showProfile();
			} else {
				this.stopInterval();

				this.hideLoader();
				this.showError(data.msg);
			}
		}
		function requestError(error){
			if(opt && opt.change_profile){
				this.loading = false;
			}
			this.stopInterval();
			this.hideLoader();
			this.showError("Something went wrong. Please try again later.")
			console.log(error);
			throw new Error("stats::requestError");
		}

		if(this.loading){
			return false
		} else {
			try{
				if(opt && opt.change_profile){
					this.loading = true;
				}
				if(opt && opt.loader){
					this.hideProfile();
					this.hideError();
					this.showLoader();
				}
				this._request(username, requestCallback.bind(this), requestError.bind(this));
			} catch(e){
				console.log(e);
				if(opt && opt.change_profile){
					this.loading = false;
				}
			}
		}
	}
	this.startInterval = function(){
		this.interval = setInterval(function(){
			this.request(this.watching);
		}.bind(this), 5000);
	}
	this.stopInterval = function(){
		clearInterval(this.interval);
	}

	this.setListeners = function(){
		this.view.form.on("submit", function(e){
			e.preventDefault();
			var u = this.view.form.find("#follower-count-input").val();
			if(u){
				this.view.form.find("#follower-count-input").val("");
				this.request(u, {loader: true, change_profile: true});
			}
		}.bind(this));
	}

	this.init = function(username){
		this.setListeners();
		if(!username){
			var i = Math.floor(Math.random() * Math.floor(this.default_profiles.length)),
				r = this.default_profiles[i];
			this.request(r, {loader: true, change_profile: true});
		} else {
			this.request(username, {loader: true, change_profile: true});
		}
		this.startInterval();
		return this;
	}
}

var Posts = function(username) {
	this.username = username;
	this.profile_picture;
	this.total_posts;
	this.followers;
	this.following;

	this.fetchPosts = function(callback){
		$.ajax({
			url: "https://www.instagram.com/" + this.username + "/",
			type: "GET",
			success: function(res){
				var matches = res.match(/window\._sharedData = ([\s\S]*?});/m);
				if(matches.length > 0 && matches[1] && matches[1].length > 0){
					console.log(matches);
					var sharedData = JSON.parse(matches[1]);
					console.log(sharedData);

					var user = sharedData.entry_data.ProfilePage[0].graphql.user;
					
					this.success = true;
					this.username = user.username;
					this.profile_picture = user.profile_pic_url;
					this.total_posts = user.edge_owner_to_timeline_media.count;
					this.followers = user.edge_followed_by.count;
					this.following = user.edge_follow.count;
				} else {
					this.success = false;
				}

				callback();
			}.bind(this),
			error: function(err){
				if(err.status === 404){
					this.exists = false;
					this.success = false;
				} else {
					this.success = false;
				}
				callback();
			}.bind(this),
		});
	}
}