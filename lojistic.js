function abTrack(e,t,n){(null==abGet(e)||n)&&localStorage.setItem(e,t)}function abGet(e){return localStorage.getItem(e)}function compareRates(){var e=$("input[name=hs\\[phone\\]]"),t="/ajax/rate-comparison";e.inputmask("remove");var n=$("#shipping-comparison-form").serialize();e.inputmask("(999) 999-9999"),$.post(t,n,function(e){$("#calc-results").html(e)})}function getRates(e){var t=$("input[name=hs\\[phone\\]]"),n="/ajax/rates-calculator";t.inputmask("remove");var i=$("#shipping-calculator-form").serialize();t.inputmask("(999) 999-9999"),$.post(n,i,function(e){$("#calc-results").html(e),$(document).ready(function(){})})}function updateDiscountLabels(){updateDiscountLabel("A"),updateDiscountLabel("B")}function updateDiscountLabel(e){$("#"+e+"-rate-discount-label").text($("#"+e+"-carrier").val()+" "+decodeURI($("#"+e+"-year").val())+" "+$("#"+e+"-type").val()+" Tier Incentive")}function useAdvancedDiscountOptions(){var e=$("#"+$(this).attr("id").replace("advanced-discounts","general")),t=$("label[for="+e.attr("id")+"]"),n=e.next(".input-group-addon"),i=e.closest(".form-group");t.animate({height:"toggle"}),n.animate({height:"toggle"}),e.animate({height:"toggle"}),$(this).prop("checked")?i.addClass("form-group-tab"):i.removeClass("form-group-tab")}function changeCarrierLabel(){var e=$("select[name=year], select[name=type]");"0"!=$(this).val()?e.attr("disabled",!1).prev("label").removeClass("disabled"):(e.attr("disabled",!0).prev("label").addClass("disabled"),$.each(e,function(){$(this).children().remove()}))}function loadRateGuides(){var e=$(this).attr("data-target"),t=$(e).prevUntil("label").prev(),n=$("#"+$(this).attr("id").replace("carrier","advanced-discounts")),i=$("label[for="+$(this).attr("id").replace("carrier","general")+"]");"0"!=$(this).val()?(i.text($(this).val()+" Discount"),n.attr("disabled",!1),t.removeClass("disabled"),$(e).load("/files/"+$(this).val()+"/rate-years.txt",function(){loadServices(e)}).attr("disabled",!1)):(i.text("Carrier Discount"),n.attr("disabled",!0).prop("checked",!1).closest(".form-group").removeClass("form-group-tab"),$(n.attr("data-section-toggle")).slideUp(),$("#"+n.attr("id").replace("advanced-discounts","general")).show().next(".input-group-addon").show(),$("label[for="+n.attr("id").replace("advanced-discounts","general")+"]").show(),t.addClass("disabled"),$(e).attr("disabled",!0).children().remove(),loadServices(e))}function loadServices(e){if("string"!=$.type(e)){var t=$(this).attr("data-target"),n=$(this).attr("id").replace("-year","-carrier");"0"!=$("#"+n).val()?($(t).removeClass("disabled"),$(t).attr("disabled",!1).load("/files/"+$("#"+n).val()+"/"+$(this).val()+".txt",updateDiscountLabels)):($(t).attr("disabled",!0).children().remove(),$(t).prevUntil("label").prev().addClass("disabled"))}else{var t=$(e).attr("data-target");"0"!=$("select[data-target="+e+"]").val()?($(t).prevUntil("label").prev().removeClass("disabled"),$(t).attr("disabled",!1).load("/files/"+$("select[data-target="+e+"]").val()+"/"+$(e).val()+".txt",updateDiscountLabels)):($(t).attr("disabled",!0).children().remove(),$(t).prevUntil("label").prev().addClass("disabled"))}}function prepareForResults(e,t){var n=!0,i=e.find(".required");if($.each(i,function(){n&&(n=""!=$(this).val()&&null!=$(this).val()&&0!=$(this).val())}),n){var a='<img src="/images/lojistic-logo.png" width="120px" class="animated flip infinite"><br/><br/>',o="string"!=$.type($(this).attr("data-target"))?"#submit-scroll-stop":$(this).attr("data-target"),r=$(o).offset().top-40;$("#calc-results").html(a),$("html").scrollTop()<r&&$("html, body").animate({scrollTop:r},700),t()}}function toggleHiddenRows(e){e.preventDefault(),e.stopPropagation();var t=$(".table-mask").hasClass("expanded"),n=t?"410px":"5200px",i=t?"Show All Rows":"Hide Rows",a=t?'<i class="fa fa-chevron-up"></i>':'<i class="fa fa-chevron-down"></i>';if(t?$("#show-all-rows").html("+ Show All Rows"):$("#show-all-rows").html("- Hide Rows"),$(".pulldown-label").html(i+a).find("i.fa").toggleClass("fa-rotate-180").promise().done(function(){$(".table-mask").animate({"max-height":n},1e3,function(){$(this).toggleClass("expanded")})}),t){var o=$(this).attr("data-target"),r=$(o).offset().top-40;$("html, body").animate({scrollTop:r},700)}}function calculators(){$(document).on("click",".getBtn",function(){$(this).parents("form").trigger("submit")}),$(document).on("click",".view-individual a, .view-all a",function(e){return $(this).parents(".carrier-discounts ").find("#rategeneral, #comparegeneral").toggle(),$(this).parents(".carrier-discounts ").find(".individual").toggle(),e.preventDefault(),!1}),$(document).on("click",".reset a",function(e){return $("input[type=text]").val(""),$("select").attr("data-default",""),selectDefaults("body"),e.preventDefault(),!1})}function centerTextVertically(){$(".text-vc").each(function(){var e=$(this).parent().height(),t=$(this).height();$(this).css({position:"relative",top:(e-t)/2+"px",opacity:1})})}function defaultValue(e,t){var n=setInterval(function(){jQuery(e).length>0&&(jQuery(e).val(t),clearInterval(n))},1e3)}function ifZeroThenOne(e){var t=isan(e);return 0==t&&(t=1),$(e).val(t),t}function isan(e){var t=parseFloat($(e).val().replace("$",""));return $(e).bind("keyup",function(){$(this).removeAttr("style")}),isNaN(t)&&!$(e).hasClass("not_required")&&(t=!1,$(e).css("border-color","#900"),$(e).focus()),t}function showNoResults(){$("#no-results .alert").html("Oops!<br/>The package you described would not suffer from DIM charges. You only get DIM'd on packages that are big but not heavy."),$("#dim-results").hide(),$("#no-results").show()}function makeSureDimWIsRealistic(e){var t="";t+="Yikes! <br> It looks like your packages would get billed as if they weighed ",t+=e,t+=" Lbs! Unfortunately, I only know the rates for packages up to 150 Lbs.",t+="For fancy charts and stuff, please try again with a less extreme example.",$("#no-results .alert").html(t),$("#dim-results").hide(),$("#no-results").show()}function showResults(){$("#no-results").hide(),$("#dim-results").show(),generateGraphs(),fillSummary(),$(window).trigger("resize"),$("html, body").animate({scrollTop:$("#zone-toggle").position().top-80},700)}function generateGraphs(){pricePerPackageChart(),monthlyProjectedCostsGraph()}function getDimW(){var e=parseInt($("#length").val()),t=parseInt($("#width").val()),n=parseInt($("#height").val()),i=parseInt($("#dim_divisor").val());return Math.ceil(e*t*n/i)}function fillSummary(){var e=DIM.real,t=DIM.dim,n=$("#zone-toggle select").val(),i=Math.ceil($("#weight").val()),a=parseInt($("#per_month").val()),o=getDimW(),r=t[n]-e[n];$(".res-actual-w").text(pounds(i)),$(".res-actual-p").text(e[n].formatMoney()),$(".res-dim-w").text(pounds(o)),$(".res-dim-p").text(t[n].formatMoney()),$(".res-inc-pp").text(r.formatMoney()),$(".res-inc-pm").text((r*a).formatMoney()),$(".res-inc-py").text((r*a*12).formatMoney())}function pounds(e){return e+" Lbs."}function pricePerPackageChart(){var e=DIM.real,t=DIM.dim,n={labels:["Zone2","Zone3","Zone4","Zone5","Zone6","Zone7","Zone8"],series:[[e[2],e[3],e[4],e[5],e[6],e[7],e[8]],[t[2],t[3],t[4],t[5],t[6],t[7],t[8]]]},i={seriesBarDistance:10},a=[["screen and (max-width: 640px)",{seriesBarDistance:5,axisX:{labelInterpolationFnc:function(e){return e[0]}}}]];new Chartist.Bar("#chart-ppz",n,i,a)}function monthlyProjectedCostsGraph(){var e=DIM.real,t=DIM.dim,n=parseInt($("#per_month").val()),i=parseInt($("#zone-toggle select").val()),a={labels:["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],series:[[e[i]*n*1,e[i]*n*2,e[i]*n*3,e[i]*n*4,e[i]*n*5,e[i]*n*6,e[i]*n*7,e[i]*n*8,e[i]*n*9,e[i]*n*10,e[i]*n*11,e[i]*n*12],[t[i]*n*1,t[i]*n*2,t[i]*n*3,t[i]*n*4,t[i]*n*5,t[i]*n*6,t[i]*n*7,t[i]*n*8,t[i]*n*9,t[i]*n*10,t[i]*n*11,t[i]*n*12]]},o={seriesBarDistance:10},r=[["screen and (max-width: 640px)",{seriesBarDistance:5,axisX:{labelInterpolationFnc:function(e){return e[0]}}}]];new Chartist.Bar("#chart-mpc",a,o,r)}function download(){$("a.download").each(function(){window.open($(this).attr("href"))})}function flags(){$(document).on("click",".flag-link",function(){var e=$(this).find("a").attr("href");e.length>0&&(window.location=e)})}function footer(){$(document).on("click","#footer_content div b",function(){var e=$(this).parent("div");e.hasClass("active")?e.removeClass("active"):e.addClass("active")})}function trackGaEvent(e){var t=e.split("|");return"undefined"==typeof t[1]?_gaq.push(["_trackEvent","Interaction",t[0]]):_gaq.push(["_trackEvent","Interaction",t[0],t[1]]),!1}function donutChart(e,t,n){var i=google.visualization.arrayToDataTable(e),a={title:t,pieHole:.4,legend:"none",colors:["#00C853","#164260","#FFF000","#00ACED"],slices:{1:{offset:.2},2:{offset:.2},3:{offset:.2},4:{offset:.2}}},o=new google.visualization.PieChart(document.getElementById(n));o.draw(i,a)}function hubspotForm(){$(".hp-hidden").css("display","none")}function internetExplorerIsMessingThingsUp(){var e=window.navigator.userAgent,t=e.indexOf("MSIE ");if(t>0)return parseInt(e.substring(t+5,e.indexOf(".",t)),10);var n=e.indexOf("Trident/");if(n>0){var i=e.indexOf("rv:");return parseInt(e.substring(i+3,e.indexOf(".",i)),10)}var a=e.indexOf("Edge/");return a>0?parseInt(e.substring(a+5,e.indexOf(".",a)),10):!1}function toFixIE(e){internetExplorerIsMessingThingsUp()&&e()}function resetSvg(){$("svg use").each(function(){$(this).attr("xlink:href",$(this).attr("xlink:href"))})}function insurance(){var e=Math.ceil(number($("#dec_val").val())/100),t=number($("#num").val()),n=number($("#min").val()),i=number($("#carrier_rate").val()),a=.4,o=0,r=0;o=n>e*i?n:e*i,r=e*a,o*=t,r*=t,r>=o?($("#results").addClass("hidden"),$("#dang").removeClass("hidden")):isNaN(o)||isNaN(r)?alert("Please complete the fields with numbers only"):($("#old .price b").text(floatToMoney(o)),$("#new .price b").text(floatToMoney(r)),$("#results").removeClass("hidden"),$("#dang").addClass("hidden"),drawInsChart(o,r))}function drawInsChart(e,t){for(var n=0,i=0,a=0,o=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],r=(new Date).getMonth(),s=[["Month","Carrier Price","Our Price","Savings"]],l=0;12>l;)n=e*(l+1),i=t*(l+1),a=n-i,s.push([o[r],n,i,a]),++r,r>11&&(r=0),l++;$("#chart_total").text(floatToMoney(a));var c=google.visualization.arrayToDataTable(s),u={title:"Cumulative Insurance Spending",hAxis:{title:"Month",prefix:"$"},colors:["#EB1C24","#6096c3","#00c651"]},d=new google.visualization.ColumnChart(document.getElementById("chart_div"));d.draw(c,u),$(window).trigger("resize")}function bindModals(){$(document).on("click",".modal-btn",function(){var e=$(this).attr("data-modal-title"),t=$($(this).attr("data-modal-body")).html(),n=$($(this).attr("data-modal-footer")).html();modal(e,t,n,!0)})}function modal(e,t,n,i){var a=$("#empty-modal");return a.find(".modal-title").html(e),a.find(".modal-body").html(t),a.find(".modal-footer").html(n),i&&a.modal(),a}function floatToMoney(e){return e=e.toFixed(2).replace(/./g,function(e,t,n){return!t||"."===e||(n.length-t)%3?e:","+e}),"$"+e}function number(e){if(e){for(;-1!=e.indexOf(",");)e=e.replace(",","");return e=e.replace(/[A-Za-z$-]/g,""),parseFloat(e).toFixed(2)}return 0}function valAsPercent(e){return parseInt($(e).val())/100}function offsetAnchor(){setTimeout(function(){if(0!==location.hash.length){var e=$(location.hash),t=$(e).offset().top-100;$("html, body").animate({scrollTop:t},300)}},500)}function queue(e){var t=[].splice.call(arguments,1),n=$.Deferred();return e?$.when(e()).then(function(){queue.apply(window,t)}):n.resolve(),n}function sameHeight(){$(".same-height").each(function(){0==$(this).parents(".same-height-parent").length&&$(".same-height").parent().addClass("same-height-parent")}),$(".same-height-parent").each(function(){var e=0,t=$(this).find(".same-height");t.css("min-height","unset"),t.each(function(){var t=$(this).outerHeight();t>e&&(e=t)}),$(this).find(".same-height").css("min-height",e+"px")})}function scrollTo(){$(document).on("click",".scrollTo",function(){var e=$(this).attr("data-target"),t=$(e).offset().top-120;$("html, body").animate({scrollTop:t},700)})}function selectDefaults(e){var t=-1;$(e).find("select").each(function(){t=parseInt($(this).attr("data-default")),isNaN(t)&&(t=$(this).attr("data-default")),t&&$(this).children("option").each(function(){$(this).val()==t&&$(this).attr("selected","selected")})})}function slackBtns(){$(document).on("click",".slack",function(){slack($(this).attr("data-message"))})}function slack(e,t){(-1!=window.location.href.indexOf(".com")||t)&&$.post("/slack",{message:e})}function tabs(){$(document).on("click",".tab-nav li a",function(e){var t="current",n=$(this).parent("li"),i=n.index();return $("."+t).removeClass(t),n.addClass(t),$(".tab-content > li:eq("+i+")").addClass(t),e.preventDefault(),!1}),$(".tab-nav > li:nth-child(1) a").click()}function transitionOnShow(){$(".transition-on-show").length&&$(window).scroll(function(){$(".transition-on-show").each(function(){var e=$(this).position().top,t=$(window).scrollTop()+.8*$(window).height();t>e&&!$("#logos").hasClass("transitioned")&&($(this).addClass("transitioned"),$(this).removeClass("transition-on-show"),$(this).attr("style",$(this).attr("data-transition-to")))})})}function validateVisible(){var e=!0;return $(".bug-required").removeClass("bug-required"),$(".required").filter(":visible").each(function(){""==$(this).val()&&($(this).addClass("bug-required"),e&&(e=!1,$(this).tooltip("show"),$(this).focus()))}),$("input[type=checkbox].must-check:visible").each(function(){e&&!$(this).is(":checked")&&(e=!1,$(this).is(":checked")||$(this).tooltip("show"))}),0!=$("input.bug-required:visible").length&&(e=!1),e}function validateVisibleBindings(){$(document).on("keyup, change",".bug-required",function(){""!=$(this).val()&&$(this).removeClass("bug-required")}),$(document).on("keyup",".password-a",function(){$(this).val().length>=6?reqGood(this):reqBad(this);var e=$(this).parents("form").find(".password-b");e.val().length>0&&e.trigger("keyup")}),$(document).on("keyup",".password-b",function(){$(this).val()==$(this).parents("form").find(".password-a").val()&&$(this).val().length>6?reqGood(this):reqBad(this)}),$(document).on("click",".validate-visible",function(){validateVisible()})}function reqGood(e){$(e).addClass("confirm-required"),$(e).removeClass("bug-required")}function reqBad(e){$(e).addClass("bug-required"),$(e).removeClass("confirm-required")}function validate(){$(document).on("click",".hs-button, .getBtn",function(){$(this).parents("form").find("*:input[required=required], .required").each(function(){checkInput(this)}),$(this).parents("form").find(".invalid").focus()}),$(document).on("change",".bug-required",function(){checkInput(this)}),$(document).on("keyup, change",".invalid",function(){var e=this;setTimeout(function(){checkInput(e)},100)})}function checkInput(e){var t=$(e).val();""==t?$(e).addClass("incomplete"):"email"==$(e).attr("type")?t.indexOf("@")<1&&t.indexOf(".")<1&&$(e).addClass("incomplete"):$(e).removeClass("incomplete")}function videoTabs(){$(document).on("click",".video-tab",function(){$(".video-tab.selected").removeClass("selected"),$(this).addClass("selected"),$(".video-content").removeClass("selected"),$(".video-content").filter(":eq("+$(this).index()+")").addClass("selected")})}function initVideos(){$(document).ready(function(){fancybox(),apiCall(),odometerInstance()})}function fancybox(){$(".fancybox").fancybox({loop:!1,afterLoad:function(){$("#youtube_player")[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}',"*")}})}function apiCall(){$.getJSON(url,function(e){var t=e.items,n=[];_.each(t,function(e){var t={};t.video="https://www.youtube.com/embed/",t.video+=e.snippet.resourceId.videoId,t.video+="?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0",t.text=e.snippet.title,t.img=e.snippet.thumbnails.medium.url,n.push(t)});var i=_.sample(n,5);vueVideos(i),videoGallery(n)})}function vueVideos(e){var t=e[0];e.shift();var n=e;new Vue({el:"#logistic-video",data:{main:{},first:t,videos:n,images:n},methods:{setMainVideo:function(e){this.$data.first=this.$data.videos[e]}}})}function videoGallery(e){new Vue({el:"#videoGallery",data:{main:{},items:e,images:e}})}function odometerInstance(){var e=document.getElementById("roller"),t=["#whereInTheWorldIsParcel","#LateShipmentsSuck"];e.textroller=new TextRoller({el:e,values:t,align:"left",delay:1500,loop:!1})}jQuery(document).ready(function(){$("input.phone").inputmask("(999) 999-9999"),bindModals(),slackBtns(),calculators(),tabs(),validate(),$(document).on("click","#pricing-table a",function(e){e.preventDefault()}),flags(),videoTabs(),centerTextVertically(),$("img").load(function(){centerTextVertically()}),transitionOnShow(),offsetAnchor(),scrollTo(),$("[data-href]").click(function(){window.location.href=$(this).attr("data-href")}),$(document).on("click","[data-anal]",function(){trackGaEvent($(this).attr("data-anal"))}),$("form[data-anal]").submit(function(){trackGaEvent($(this).attr("data-anal"))}),footer(),validateVisibleBindings()}),AuditCalc={min:.01,max:.07,spend:0,recovery:0,getRange:function(){return(this.max-this.min)*this.spend},updateAuditCalculator:function(){return this.spend=number($("#audit-spend").val()),this.recovery=this.calculateAuditRecoveryPercentage(),isNaN(parseInt(this.spend))?($("#audit-spend").val(""),alert("Please Enter A Dollar Amount"),!1):($("#audit-calc").removeClass("pending").removeClass("hidden-xs"),this.moveACYouMarker(),void this.updateACLabels())},moveACYouMarker:function(){left=.9*this.recovery,$("#ac-you").css("left",left+"%"),$("#ac-you div:nth-child(2)").css("height",$("#ac-chart img").height()-35+"px")},updateACLabels:function(){est=this.recovery/100*this.getRange()+this.spend*this.min,$("#ac-min-percent").text(floatToMoney(this.spend*this.min)),$("#ac-max-percent").text(floatToMoney(this.spend*this.max)),$("#ac-est-recovery").text("$"+Math.floor(est/1e3)+"K"),$("#ac-start-saving").show()},calculateAuditRecoveryPercentage:function(){var e=valAsPercent("#freight"),t=10+49*e,n=4+9*e,i=14,a=4+9*e,o=($("#gsr").is(":checked")?1:0)*t,r=valAsPercent("#ground")*n,s=valAsPercent("#domestic")*i,l=valAsPercent("#resi")*a;return o+r+s+l+1}},$("#audit-spend").length>0&&($(document).ready(function(){$("#audit-spend").inputmask()}),$(document).on("submit","#annual-spend-form",function(e){e.preventDefault(),_gaq.push(["_trackEvent","Interaction","Calculator","Audit Calculator"]),AuditCalc.updateAuditCalculator()}),$(document).on({change:function(){AuditCalc.updateAuditCalculator()},slidestop:function(){AuditCalc.updateAuditCalculator()}})),$(document).ready(function(){$("[data-section-toggle]").click(function(e){"a"==$(this).prop("tagName")&&(e.preventDefault(),e.stopPropagation());var t=$(this).attr("data-section-toggle");$(t).slideToggle()}),$("#shipping-comparison-form").submit(function(e){return e.preventDefault(),prepareForResults($(this),compareRates),!1}),$("#shipping-calculator-form").submit(function(e){return e.preventDefault(),prepareForResults($(this),getRates),!1}),$("select[name*='[carrier]']").change(loadRateGuides),$("select[name*='[year]']").change(loadServices),$("select[name=carrier]").change(loadRateGuides),$("#rate-year").change(loadServices),$("#phone").inputmask("remove"),$(".dollars").inputmask("Regex",{regex:"^[0-9]*\\.[0-9]{1,2}",rightAlign:!0}),$(".percentage").inputmask({mask:"9{1,2}[\\.9{1,2}]",greedy:!1,placeholder:"",rightAlign:!0}),$('[data-toggle="tooltip"]').tooltip({template:'<div class="tooltip" role="tooltip"><div class="tooltip-inner" style="font-size: 14px;"></div><div class="tooltip-arrow-down"><i class="fa fa-arrow-down"></i></div></div>'}),$("input[id*=advanced-discounts]").change(useAdvancedDiscountOptions),$("select[id*=type]").change(updateDiscountLabels)}),$(window).resize(function(){centerTextVertically()}),$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),DIM=[],$(document).on("click","#toggle-advanced",function(){$(".advanced").hasClass("showing")?($(".advanced").removeClass("showing animated fadeOutDown"),$("#toggle-advanced").text("SHOW ADVANCED OPTIONS")):($(".advanced").addClass("showing animated bounceInDown"),$("#toggle-advanced").text("HIDE ADVANCED OPTIONS"))}),$(document).on("click","#calculate-dims",function(){_gaq.push(["_trackEvent","Interaction","Calculator","DIM Calculator"]);var e=isan("#dim_divisor");(!e||isNaN(e))&&(e=166,$("#dim_divisor").val(166));var t=ifZeroThenOne("#length"),n=ifZeroThenOne("#width"),i=ifZeroThenOne("#height"),a=ifZeroThenOne("#weight");a>150&&(a=150,$("#weight").val(150)),$.post("/ajax/dim-calculator",{discount:isan("#discount"),per_month:isan("#per_month"),carrier:$("#carrier").val(),weight:a,l:t,w:n,h:i,email:$("#email").val(),dim_divisor:e,min:isan("#min_charge")},function(e){if(DIM=JSON.parse(e),DIM.dim[2]<=DIM.real[2])showNoResults();else if(getDimW()>150){var t=getDimW();makeSureDimWIsRealistic(t)}else showResults()})}),$(document).on("change","#zone-toggle select",function(){showResults()}),google.load("visualization","1",{packages:["corechart"]}),$(document).ready(function(){hubspotForm()}),ImageViewer={init:function(){$("#image-viewer").addClass("animated"),$(document).on("click",".show-image-viewer",function(){ImageViewer.show()}),$(document).on("click","#image-viewer-close",function(){ImageViewer.close()}),this.changeImage($("#image-list img:first-child")),$(document).on("click","#image-list img",function(){ImageViewer.changeImage($(this))}),this.bindArrowKeys()},changeImage:function(e){var t=$("#image-list");e||(e=t.find(".current").next("img"),0==e.length&&(e=t.find("img:first-child"))),t.find(".current").removeClass("current"),e.addClass("current"),$("#image-stage img").attr("src",e.attr("src"))},close:function(){$("#image-viewer").removeClass("fadeInDownBig").addClass("fadeOutUpBig")},show:function(){$("#image-viewer").css("display","block").addClass("fadeInDownBig").removeClass("fadeOutUpBig")},bindArrowKeys:function(){$(document).keydown(function(e){var t=$("#image-list"),n=t.find(".current");switch(e.which){case 27:ImageViewer.close();break;case 37:var i=n.prev("img");0==i.length&&(i=t.find("img:last-child()")),ImageViewer.changeImage(i);break;case 39:var a=n.next("img");0==a.length&&(a=t.find("img:first-child()")),ImageViewer.changeImage(i)}})}},$(document).on("click",".calculate",function(){insurance()}),$(document).on("click",".edit",function(){$(this).prev("b").hide(),$(this).prev("b").prev("input").show(),$(this).hide(),$(".rates .calculate").show()}),google.load("visualization","1",{packages:["corechart"]}),Interview={init:function(e){e&&(Interview.nextStep(),Interview.nextTitle()),$(document).on("click",".next-step",function(){var e=validateVisible();return e?void Interview.nextStep():!1}),$(document).on("click",".prev-step",function(){Interview.prevStep()}),$(document).on("click",".show-step",function(){Interview.showStep($(this).data("step-target"))})},nextTitle:function(){var e=$(".step-title:visible");e.hide(),e.next(".step-title").css("display","block").addClass("slideInLeft")},nextStep:function(){var e=$(".step:visible");e.hide(),e.next(".step").css("display","block").addClass("slideInLeft")},prevStep:function(){var e=$(".step:visible");e.hide(),e.prev(".step").css("display","block").addClass("slideInLeft")},showStep:function(e){var t=$(".step:visible");t.hide(),$(".step:eq("+e+")").css("display","block").addClass("slideInLeft")}},$(document).on("click",".map",function(){$(this).find("iframe").css("pointer-events","auto")}),Sidenav=new Vue({el:"#side-nav",data:{state:"closed",groups:[{name:"SIGN IN",state:"",links:[{name:"Intelliship<br/> Shipping Software",url:"https://shipping.lojistic.com/"},{name:"DATADOT<br/>Audit Reporting",url:"https://data.lojistic.com/"}]},{name:"SOLUTIONS",state:"",links:[{name:" Parcel &amp; Freight Audit",url:"/parcel-freight-bill-audit"},{name:" Carrier Negotiation",url:"/carrier-contract-negotiation"},{name:" Wholesale LTL Rates",url:"/wholesale-ltl-rate-marketplace"},{name:" Freight Management",url:"/freight-management"},{name:"Shipping Insurance",url:"/shipping-insurance"},{name:"Shipping Software",url:"/shipping-software"},{name:"Tracking Software",url:"/halo"},{name:"Savings Checklist",url:"/savings-checklist"}]},{name:"FREE RESOURCES",state:"",links:[{name:"Audisee, Instant Audit",url:"/audisee/instant-parcel-audit"},{name:"Insurance Cost Calculator",url:"/shipping-insurance#insurance-calculator"},{name:"FedEx &amp; UPS Rates Calculator",url:"/shipping-costs-calculators/fedex-ups-rates-calculator"},{name:"FedEx & UPS Rates Comparison Tool",url:"/shipping-costs-calculators/fedex-ups-rate-comparison-tool"},{name:"5 Secrets White Paper",url:"/white-papers/5-secrets-ups-and-fedex-dont-want-you-to-know"},{name:"General Price Increase White Paper",url:"/white-papers/general-price-increase"},{name:"Fuel Surcharge White Paper",url:"/white-papers/fuel-surcharge"}]},{name:"ABOUT LOJISTIC",state:"",links:[{name:"Our Story",url:"/lojistic"},{name:"About Lojistic",url:"/about-lojistic"},{name:"Cost Reduction Services",url:"/reduce-shipping-costs"},{name:"Pricing",url:"/lojistic-pricing"},{name:"Referral Partner Program",url:"/lojistic-referral-program"},{name:"News &amp; Events",url:"/freight-news-events"},{name:"Careers",url:"/lojistic-careers"}]},{name:"CONTACT US",state:"",links:[{name:"(800) 783-5753",url:"tel:8007835753"},{name:"Email Us",url:"mailto:info@lojistic.com"},{name:"Contact Info",url:"/contact-lojistic"}]},{name:"SOCIAL",state:"",links:[{name:"Google+",url:"https://plus.google.com/+Lojistic"},{name:"LinkedIn",url:"http://www.linkedin.com/company/lojistic"},{name:"Twitter",url:"https://www.twitter.com/LojisticUSA"},{name:"Facebook",url:"https://www.facebook.com/LojisticUSA"},{name:"Blog",url:"/blog"}]}]},methods:{close:function(){Nav.toggleMenu()},menuIs:function(e){return this.state==e},target:function(e){return-1==e.indexOf("http")?"":"_blank"},toggleGroupState:function(e){var t=this.groups[e];"open"==t.state?t.state="closed":t.state="open"}}}),Nav=new Vue({el:"#headernav",data:{scrollTopAfter:84,scrollNavTriggerWidth:997,sideNavMax:997,headerState:"fullnav",menuMode:"top",menuState:"closed"},created:function(){this.setListeners()},methods:{viewWidth:function(){return window.innerWidth},scrollTop:function(){return document.body.scrollTop+document.documentElement.scrollTop},setListeners:function(){window.onscroll=function(){Nav.refresh()},window.onresize=function(){Nav.refresh()},setTimeout(function(){Nav.refresh()},300),toFixIE(resetSvg)},toggleMenu:function(){"open"==this.menuState?this.setMenuState("closed"):this.setMenuState("open")},fullNav:function(){"fullnav"!=this.$data.headerState&&this.setMenuState("closed"),this.$data.headerState="fullnav"},setMenuState:function(e){this.$data.menuState=e,Sidenav.state=e},scrollNav:function(){"scrollnav"!=this.$data.headerState&&this.setMenuState("closed"),this.$data.headerState="scrollnav"},refresh:function(){this.scrollTop()<this.scrollTopAfter&&this.scrollNavTriggerWidth<=this.viewWidth()?this.fullNav():this.scrollNav()}}}),Number.prototype.formatMoney=function(e){var t=this,e=2,n=".",i=",",a=0>t?"-":"",o=parseInt(t=Math.abs(+t||0).toFixed(e))+"",r=(r=o.length)>3?r%3:0;return"$"+a+(r?o.substr(0,r)+i:"")+o.substr(r).replace(/(\d{3})(?=\d)/g,"$1"+i)+(e?n+Math.abs(t-o).toFixed(e).slice(2):"")},$(window).resize(function(){sameHeight()}),$(document).ready(function(){sameHeight()}),jQuery(document).on("click","#schedule_btn",function(){var e="<iframe width='100%;' height='685px' frameborder='0' src='https://www.timetrade.com/book/G16JM'></iframe>";jQuery("#schedule_iframe iframe").remove(),jQuery(e).prependTo("#schedule_iframe"),jQuery("#schedule_contact").css("padding-bottom","0"),jQuery("#schedule_iframe").show()}),jQuery(document).ready(function(){$("#schedule_iframe").css("display","none")}),function(){var e,t,n,i,a,o,r,s,l,c,u,d,h,p,m,f,g,v,w,b,y,x,C,k,I,M,T,S,D,A,O,E=[].slice;b='<span class="odometer-value"></span>',f='<span class="odometer-ribbon"><span class="odometer-ribbon-inner">'+b+"</span></span>",r='<span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner">'+f+"</span></span>",c='<span class="odometer-formatting-mark"></span>',n=32,t=123,e=t-n,o="d",u=/^\(?([^)]*)\)?(?:(.)(d+))?$/,d=30,l=2e3,i=20,h=2,s=.5,p=1e3/d,a=1e3/i,g="transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd",M=document.createElement("div").style,v=null!=M.transition||null!=M.webkitTransition||null!=M.mozTransition||null!=M.oTransition,k=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame,m=window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver,y=function(e){var t;return t=document.createElement("div"),t.innerHTML=e,t.children[0]},C=function(){var e,t;return null!=(e=null!=(t=window.performance)&&"function"==typeof t.now?t.now():void 0)?e:+new Date},I=function(e,t){return null==t&&(t=0),e},x=function(e){},S=!1,(T=function(){var e,t,n,i,a;if(!S&&null!=window.jQuery){for(S=!0,i=["html","text"],a=[],t=0,n=i.length;n>t;t++)e=i[t],a.push(function(e){var t;return t=window.jQuery.fn[e],window.jQuery.fn[e]=function(e){var n;return null==e||null==(null!=(n=this[0])?n.odometer:void 0)?t.apply(this,arguments):this[0].odometer.update(e)}}(e));return a}})(),setTimeout(T,0),w=function(){function t(e){var n,i,a,o,r,s,c,u,d,m,f,g,v,w,b=this;this.options=e;try{if(this.el=this.options.el,null!=this.el.odometer)return this.el.odometer;for(this.el.odometer=this,f=t.options,o=c=0,d=f.length;d>c;o=++c)i=f[o],null==this.options[i]&&(this.options[i]=o);null==(r=this.options).duration&&(r.duration=l),this.options.valuesIndex=0,this.options.values=this.cleanArray(),this.MAX_VALUES=this.options.duration/p/h|0,this.resetFormat(),this.value=this.cleanValue(null!=(g=this.options.values[0])?g:""),this.renderInside(),this.render();try{for(v=["HTML","Text"],s=function(e){return Object.defineProperty(b.el,"inner"+e,{get:function(){return b.inside["outer"+e]},set:function(e){return b.update(e)}})},u=0,m=v.length;m>u;u++)a=v[u],s(a)}catch(y){n=y,this.watchForMutations()}setInterval(function(){var e,t;try{if(null!=(t=b.options.loop)?t:!0)return b.options.valuesIndex>=b.options.values.length-1?b.options.valuesIndex=0:b.options.valuesIndex++,e=b.options.values[b.options.valuesIndex],$(b.el).html(e);if(b.options.valuesIndex<b.options.values.length-1)return b.options.valuesIndex++,e=b.options.values[b.options.valuesIndex],$(b.el).html(e)}catch(i){return n=i}},null!=(w=this.options.delay)?w:3e3)}catch(y){}}return t.prototype.cleanArray=function(){var e,t,n,i,a,o,r,s,l,c,u;for(i=this.maxLength(this.options.values),c=this.options.values,n=r=0,l=c.length;l>r;n=++r){if(t=c[n],a=t.split(""),e=null!=(u=(i-t.length)/2)?u:0,e>0)for(o=s=1;e>=1?e>=s:s>=e;o=e>=1?++s:--s)"left"===this.options.align?a.push("  "):"right"===this.options.align?a.unshift("  "):(a.push(" "),a.unshift(" "));this.options.values[n]=a.join("")}return this.options.values},t.prototype.maxLength=function(e){var t,n,i,a;for(n=0,i=0,a=e.length;a>i;i++)t=e[i],t.length>n&&(n=t.length);return n},t.prototype.renderInside=function(){return this.inside=document.createElement("div"),this.inside.className="odometer-inside",this.el.innerHTML="",this.el.appendChild(this.inside)},t.prototype.watchForMutations=function(){var e,t=this;if(null!=m)try{return null==this.observer&&(this.observer=new m(function(e){var n;return n=t.el.innerText,t.renderInside(),t.render(t.value),t.update(n)})),this.watchMutations=!0,this.startWatchingMutations()}catch(n){e=n}},t.prototype.startWatchingMutations=function(){return this.watchMutations?this.observer.observe(this.el,{childList:!0}):void 0},t.prototype.stopWatchingMutations=function(){var e;return null!=(e=this.observer)?e.disconnect():void 0},t.prototype.intToChar=function(e){return e=String.fromCharCode(e+n)},t.prototype.cleanValue=function(e){var t;
return"string"==typeof e?(e=e.split(""),e=function(){var i,a,o;for(o=[],i=0,a=e.length;a>i;i++)t=e[i],o.push(t.charCodeAt(0)-n);return o}()):"object"==typeof e&&(e=function(){var i,a,o;for(o=[],i=0,a=e.length;a>i;i++)t=e[i],o.push(t.charCodeAt(0)-n);return o}()),e},t.prototype.bindTransitionEnd=function(){var e,t,n,i,a,o,r=this;if(!this.transitionEndBound){for(this.transitionEndBound=!0,t=!1,a=g.split(" "),o=[],n=0,i=a.length;i>n;n++)e=a[n],o.push(this.el.addEventListener(e,function(){return t?!0:(t=!0,setTimeout(function(){return r.render(),t=!1},0),!0)},!1));return o}},t.prototype.resetFormat=function(){var e,t,n,i,a,r,s,l;if(e=null!=(s=this.options.format)?s:o,e||(e="d"),n=u.exec(e),!n)throw new Error("TextRoller: Unparsable digit format");return l=n.slice(1,4),r=l[0],a=l[1],t=l[2],i=(null!=t?t.length:void 0)||0,this.format={repeating:r,radix:a,precision:i}},t.prototype.render=function(e){var t,n,i,a,o,r,s,l,c,u,d,h;for(null==e&&(e=this.value),this.stopWatchingMutations(),this.resetFormat(),this.inside.innerHTML="",r=this.options.theme,t=this.el.className.split(" "),o=[],l=0,u=t.length;u>l;l++)n=t[l],n.length&&((a=/^odometer-theme-(.+)$/.exec(n))?r=a[1]:/^odometer(-|$)/.test(n)||o.push(n));for(o.push("odometer"),v||o.push("odometer-no-transitions"),r?o.push("odometer-theme-"+r):o.push("odometer-auto-theme"),this.el.className=o.join(" "),this.ribbons={},this.digits=[],s=!this.format.precision||!x(e)||!1,h=e.reverse(),c=0,d=h.length;d>c;c++)i=h[c],this.intToChar(i===this.format.radix)&&(s=!0),this.addDigit(i,s);return this.startWatchingMutations()},t.prototype.update=function(e){var t=this;return e=this.cleanValue(e),e!==this.value?(e>this.value?this.el.className+=" odometer-animating-up":this.el.className+=" odometer-animating-down",this.stopWatchingMutations(),this.animate(e),this.startWatchingMutations(),setTimeout(function(){return t.el.offsetHeight,t.el.className+=" odometer-animating"},0),this.value=e):void 0},t.prototype.renderDigit=function(){return y(r)},t.prototype.insertDigit=function(e,t){return null!=t?this.inside.insertBefore(e,t):this.inside.children.length?this.inside.insertBefore(e,this.inside.children[0]):this.inside.appendChild(e)},t.prototype.addSpacer=function(e,t,n){var i;return i=y(c),i.innerHTML=e,n&&(i.className+=" "+n),this.insertDigit(i,t)},t.prototype.addDigit=function(e,t){var n,i,a;if(null==t&&(t=!0),"-"===e)return this.addSpacer(e,null,"odometer-negation-mark");if(e===this.format.radix)return this.addSpacer(e,null,"odometer-radix-mark");if(t)for(a=!1;;){if(!this.format.repeating.length){if(a)throw new Error("Bad odometer format without digits");this.resetFormat(),a=!0}if(n=this.format.repeating[this.format.repeating.length-1],this.format.repeating=this.format.repeating.substring(0,this.format.repeating.length-1),"d"===n)break;this.addSpacer(n)}return i=this.renderDigit(),i.querySelector(".odometer-value").innerHTML=this.intToChar(e),this.digits.push(i),this.insertDigit(i)},t.prototype.animate=function(e){return v&&"count"!==this.options.animation?this.animateSlide(e):this.animateCount(e)},t.prototype.valDiff=function(e,t){var n,i,a,o,r;for(n=[],i=Math.max(t.length,e.length),a=o=0,r=i-1;r>=0?r>=o:o>=r;a=r>=0?++o:--o)n[a]=(t[a]||0)-(e[a]||0);return n},t.prototype.noChanges=function(e){var t,n,i;for(n=0,i=e.length;i>n;n++)if(t=e[n],t!==!1)return!0;return!1},t.prototype.animateCount=function(e){var t,n,i,o,r,s=this;if(n=+e-this.value)return o=i=C(),t=this.value,(r=function(){var l,c,u;return C()-o>s.options.duration?(s.value=e,void s.render()):(l=C()-i,l>a&&(i=C(),u=l/s.options.duration,c=n*u,t+=c,s.render(Math.round(t))),null!=k?k(r):setTimeout(r,a))})()},t.prototype.getDigitCount=function(){var e,t,n,i,a,o,r;for(a=1<=arguments.length?E.call(arguments,0):[],e=0,t=o=0,r=a.length;r>o;t=++o)i=a[t],i.length>e&&(e=i.length),a[t]=Math.abs(i);return n=Math.max.apply(Math,a),Math.ceil(Math.log(n+1)/Math.log(10)),e},t.prototype.getFractionalDigitCount=function(){var e,t,n,i,a,o,r;for(a=1<=arguments.length?E.call(arguments,0):[],t=/^\d*\.(\d*?)0*$/,e=o=0,r=a.length;r>o;e=++o)i=a[e],a[e]=i.toString(),n=t.exec(a[e]),null==n?a[e]=0:a[e]=n[1].length;return Math.max.apply(Math,a)},t.prototype.resetDigits=function(){return this.digits=[],this.ribbons=[],this.inside.innerHTML="",this.resetFormat()},t.prototype.animateSlide=function(t){var n,i,a,o,r,l,c,u,d,h,p,m,f,g,v,$,w,b,y,x,C,k,I,M,T,S,D,A,O,E,N,L;if(w=this.value,u=0,u&&(t*=Math.pow(10,u),w*=Math.pow(10,u)),a=this.valDiff(t,this.value),this.noChanges(a)){for(this.bindTransitionEnd(),o=this.getDigitCount(w,t),r=[],n=0,p=C=O=o-1;0>=O?0>=C:C>=0;p=0>=O?++C:--C){if(b=Math.floor(w[p]),c=Math.floor(t[o-1-p]),l=c-b,Math.abs(l)>this.MAX_VALUES){for(h=[],m=l/(this.MAX_VALUES+this.MAX_VALUES*n*s),i=b;l>0&&c>i||0>l&&i>c;)h.push(Math.round(i)),i+=m;h[h.length-1]!==c&&h.push(c),n++}else h=function(){L=[];for(var e=b;c>=b?c>=e:e>=c;c>=b?e++:e--)L.push(e);return L}.apply(this);for(p=k=0,M=h.length;M>k;p=++k)d=h[p],h[p]=Math.abs(d%e);r.push(h)}for(this.resetDigits(),E=r.reverse(),p=I=0,T=E.length;T>I;p=++I){for(h=E[p],this.digits[p]||this.addDigit(" ",!1),null==(x=this.ribbons)[p]&&(x[p]=this.digits[p].querySelector(".odometer-ribbon-inner")),this.ribbons[p].innerHTML="",v=[],y=D=0,N=o-1;N>=0?N>=D:D>=N;y=N>=0?++D:--D)v[y]=0;for(a>v&&(h=h.reverse()),f=A=0,S=h.length;S>A;f=++A)d=h[f],$=document.createElement("div"),$.className="odometer-value",$.innerHTML=this.intToChar(d),this.ribbons[p].appendChild($),f===h.length-1&&($.className+=" odometer-last-value"),0===f&&($.className+=" odometer-first-value")}return g=this.inside.querySelector(".odometer-radix-mark"),null!=g&&g.parent.removeChild(g),u?this.addSpacer(this.format.radix,this.digits[u-1],"odometer-radix-mark"):void 0}},t}(),w.options=null!=(A=window.odometerOptions)?A:{},setTimeout(function(){var e,t,n,i,a;if(window.odometerOptions){i=window.odometerOptions,a=[];for(e in i)t=i[e],a.push(null!=(n=w.options)[e]?(n=w.options)[e]:n[e]=t);return a}},0),w.init=function(){var e,t,n,i,a;if(null!=document.querySelectorAll){for(t=document.querySelectorAll(w.options.selector||".odometer"),a=[],n=0,i=t.length;i>n;n++)e=t[n],a.push(e.odometer=new w({el:e,values:[e.innerText,"coucou","bonjour","salut"]}));return a}},null!=(null!=(O=document.documentElement)?O.doScroll:void 0)&&null!=document.createEventObject?(D=document.onreadystatechange,document.onreadystatechange=function(){return"complete"===document.readyState&&w.options.auto!==!1&&w.init(),null!=D?D.apply(this,arguments):void 0}):document.addEventListener("DOMContentLoaded",function(){return w.options.auto!==!1?w.init():void 0},!1),window.TextRoller=w}.call(this),$(document).on("click",".toggle",function(){$($(this).attr("data-target")).toggleClass("hidden")});var url="/videos/index";