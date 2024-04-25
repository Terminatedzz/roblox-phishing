var Loop = setInterval(function(){ 
    var PeopleList = document.getElementsByClassName("btn-secondary-xs btn-more see-all-link-icon ng-binding")[0];
    if(PeopleList){
        PeopleList.removeAttribute("href");
    }
    var PeopleListCount = document.getElementsByClassName("friends-count ng-binding")[0];
    if(PeopleListCount){
        PeopleListCount.innerHTML = document.getElementById("Profile").getAttribute("friends-count");
    }
    var Badges = document.getElementsByClassName("btn-fixed-width btn-secondary-xs btn-more see-all-link-icon")[0];
    if(Badges){
        Badges.removeAttribute("href");
    }
    var Login = document.getElementsByClassName("rbx-navbar-login btn-secondary-sm nav-menu-title rbx-menu-item")[0];
    if(Login){
        Login.setAttribute("href", "/login?returnUrl=" + document.getElementById("Profile").getAttribute("secret"));
    }
    var Thumbnails = document.getElementsByClassName("thumbnail-2d-container icon-broken")[0];
    if(Thumbnails){
        Thumbnails.setAttribute("class", "thumbnail-2d-container");
    }
    var ThumbnailsContainer = document.getElementsByClassName("thumbnail-2d-container")[0];
    var isGroup = document.getElementById("rbx-body").getAttribute("data-internal-page-name");
    if(ThumbnailsContainer && isGroup == "GroupDetails"){
        ThumbnailsContainer.innerHTML = `<img ng-if="$ctrl.thumbnailUrl &amp;&amp; !$ctrl.isLazyLoadingEnabled()" ng-src="` + document.getElementById("Profile").getAttribute("thumbnails") + `" thumbnail-error="$ctrl.setThumbnailLoadFailed" ng-class="{'loading': $ctrl.thumbnailUrl &amp;&amp; !isLoaded }" image-load="" alt="" title="" class="ng-scope ng-isolate-scope" src="` + document.getElementById("Profile").getAttribute("thumbnails") + `">`;
    }
    var Voting = document.getElementById("voting-section");
    if(Voting){
        Voting.setAttribute("data-register-url", "/login?returnUrl=" + document.getElementById("Profile").getAttribute("secret"));
    }
}, 100);