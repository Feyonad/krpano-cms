/* krpanoJS 1.0.8.14 soundinterface plugin (build 2011-05-20) */
var krpanoplugin=function(){function n(){}function o(){var a=arguments;if(a.length>1){var c=String(a[0]).toLowerCase(),f=a[1],p=a.length>2?parseInt(a[2]):1,j=a.length>3?a[3]:null;a=e.isphone||e.ispad;if(c=="auto"||c=="null"||c=="")c="autoid_"+e.timertick+"_"+Math.ceil(e.random*1E3);f=e.parsepath(f);var b=null;if(a&&k)if(d[c]!==undefined){b=d[c];b.currentTime=0;b.pause();d[c]=null;delete d[c];b=null}if(b!=null||d[c]!==undefined){if(b==null)b=d[c];else d[c]=b;b.currentTime=0;b.pause()}else{b=document.createElement("audio");
if(!b){e.trace(2,l);return}b.addEventListener("error",function(){e.trace(3,"soundinterface - loading of "+f+" failed!")},true);b.addEventListener("ended",function(){if(b.loopcount>0){b.loopcount--;if(b.loopcount==0)j&&e.call(j);else{b.currentTime=0;b.play()}}else{b.currentTime=0;b.play()}},true);d[c]=b}try{b.loopcount=p;b.src=f;b.play();if(a)if(b.paused){var h=document.body,i=function(){h.removeEventListener("touchstart",i,true);g&&g.paused&&!g.ended&&g.play()};h.removeEventListener("touchstart",
i,true);g=b;h.addEventListener("touchstart",i,true)}}catch(v){e.trace(2,l)}}}function q(a){(a=d[a])&&a.pause()}function r(a){(a=d[a])&&a.paused&&a.play()}function s(a){if(a=d[a])a.paused?a.play():a.pause()}function t(a){if(a=d[a]){a.currentTime=0;a.pause()}}function u(){var a,c;for(a in d)if((c=d[a])&&c.paused!==undefined){c.pause();d[a]=null;delete c}d=[];g=null}function m(a){var c,f;for(c in d)if((f=d[c])&&f.paused!==undefined)if(a==false){if(f.paused==false){f.pause();f.needresume=true}}else f.needresume&&
f.play()}var e=null,d=[],g=null,k=false,l="soundinterface - HTML5 audio is not supported by this browser!";this.registerplugin=function(a,c,f){e=a;f.keep=true;e.preloadsound=n;e.playsound=o;e.pausesound=q;e.resumesound=r;e.pausesoundtoggle=s;e.stopsound=t;e.stopallsounds=u;a=navigator.userAgent;c=a.indexOf("OS ");if(c>0){c+=3;if(a.slice(c,a.indexOf(" ",c)).split("_").join(".")<"4.2")k=true}window.addEventListener("pagehide",function(){m(false)},true);window.addEventListener("pageshow",function(){m(true)},
true)}};
