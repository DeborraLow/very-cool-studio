$(document).ready(function(){function e(){var e=document.getElementById("type-tester-editable"),t=document.getElementById("webkitfeatures").innerHTML;if("MozFontFeatureSettings"in e.style){e.style.MozFontFeatureSettings="normal";var n=document.getElementById("mozfeatures").innerHTML;e.style.MozFontFeatureSettings="'"+n+"'","normal"===e.style.MozFontFeatureSettings&&(e.style.MozFontFeatureSettings=t)}document.getElementById("w3cfeatures").innerHTML=t,e.style.msFontFeatureSettings=t,e.style.oFontFeatureSettings=t,e.style.WebkitFontFeatureSettings=t,e.style.FontFeatureSettings=t}function t(){var t=["smcp","c2sc","case","lnum","onum","tnum","pnum","frac","afrc","liga","dlig","hlig","clig","swsh","calt","hist","ss01","ss02","ss03","ss04","ss05","ss06","ss07"],n=["liga"],s="",a="",o;for(o in n)document.getElementById(n[o]).checked||(s+=n[o]+"=0, "),document.getElementById(n[o]).checked||(a+="&quot;"+n[o]+"&quot; 0, ");for(o in t)document.getElementById(t[o]).checked&&(s+=t[o]+"=1, "),document.getElementById(t[o]).checked&&(a+="&quot;"+t[o]+"&quot; 1, ");s=s.substring(0,s.length-2),a=a.substring(0,a.length-2),document.getElementById("mozfeatures").innerHTML=s,document.getElementById("msfeatures").innerHTML=a,document.getElementById("ofeatures").innerHTML=a,document.getElementById("webkitfeatures").innerHTML=a,document.getElementById("w3cfeatures").innerHTML=a,e()}$("#font-family-select").data("oldVal",$("#font-family-select").val()),$("#font-family-select").change(function(){var e=$(this),t=e.val(),n=e.data("oldVal");e.data("oldVal",t),$("div.type-tester div.fontselect").removeClass(n).addClass(t)}),$("#font-weight-select").data("oldVal",$("#font-weight-select").val()),$("#font-weight-select").change(function(){var e=$(this),t=e.val(),n=e.data("oldVal");e.data("oldVal",t),$("div.type-tester div.fontweight").removeClass(n).addClass(t)}),$("#font-size-slider").on("change",function(){var e=$(this).val();$("div.type-tester div.fontselect").css("font-size",e+"px")}),$(".tabgroup > div").hide(),$(".tabgroup > div.active").show(),$(".tabs a").click(function(e){e.preventDefault();var t=$(this),n="#"+t.parents(".tabs").data("tabgroup"),s=t.closest("li").siblings().children("a"),a=t.attr("href");s.removeClass("active"),t.addClass("active"),$(n).children("div").hide(),$(a).show()}),$("#font-feature-input-form").change(function(){t()}),t()});