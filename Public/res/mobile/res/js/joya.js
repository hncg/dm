(function(){var ab=window,al=document,aA=encodeURIComponent,ac=decodeURIComponent,R=void 0,N="push",F="join",J="split",Q="length",w="indexOf",m="prototype",H="toLowerCase";var r={};r.util={join:function(l){if(l instanceof Array){var s="";for(var p=0,g=l.length;p<g;p++){s+=l[p]+((p==g-1)?"":"|||")}return s}return l},getParameter:function(p,l){var s=new RegExp("(?:^|&|[?]|[/])"+l+"=([^&]*)");var g=s.exec(p);return g?aA(g[1]):""},Wv:function(s,g,p,l){s=s+"="+g+"; path=/; ";l&&(s+="expires="+(new Date(new Date().getTime()+l)).toGMTString()+"; ");p&&(s+="domain="+p+";");al.cookie=s},Vv:function(y){for(var g=[],t=al.cookie[J](";"),l=RegExp("^\\s*"+y+"=\\s*(.*?)\\s*$"),s=0;s<t[Q];s++){var p=t[s]["match"](l);p&&g[N](p[1])}return g}};var aG=0;function ag(g){return(g?"_":"")+aG++}var ai=ag(),ad=ag(),af=ag(),I=ag(),d=ag(),aI=ag(),V=ag(),am=ag(),ae=ag(),ah=ag(),ax=ag(),aw=ag(),aE=ag(),aN=ag(),Y=ag(),T=ag(),B=ag(),z=ag(),M=ag(),az=ag(),n=ag(),A=ag(),i=ag(),a=ag(),aK=ag(),av=ag(),P=ag(),aJ=ag(),f=ag(),ar=ag(),c=ag(),ao=ag(),aR=ag(),b=ag(),aL=ag();var aM=function(){var s={};this.set=function(y,t){s[y]=t};this.get=function(t){return s[t]!==R?s[t]:null};this.m=function(C){var t=this.get(C);var D=t==R||t===""?0:1*t;s[C]=D+1};var p=an();this.set(ai,p.account);this.set(I,p.domain);this.set(af,k());this.set(d,Math.round((new Date).getTime()/1000));this.set(aI,15552000000);this.set(V,1296000000);this.set(am,1800000);this.set(aN,S());var g=Z();this.set(Y,g.name);this.set(T,g.version);this.set(B,G());var l=aH();this.set(z,l.D);this.set(M,l.C);this.set(az,l.language);this.set(n,l.javaEnabled);this.set(A,l.characterSet);this.set(aJ,ak);this.set(aR,new Date().getTime());this.set(aL,(p.erp_account?p.erp_account:r.util.Vv("pin"))||"-")};var ak="baidu:wd,baidu:word,so.com:q,so.360.cn:q,360so.com:q,360sou.com:q,baidu:q1,m.baidu:word,m.baidu:w,wap.soso:key,m.so:q,page.yicha:key,sz.roboo:q,i.easou:q,wap.sogou:keyword,google:q,soso:w,sogou:query,youdao:q,ucweb:keyword,ucweb:word,114so:kw,yahoo:p,yahoo:q,live:q,msn:q,bing:q,aol:query,aol:q,daum:q,eniro:search_word,naver:query,pchome:q,images.google:q,lycos:query,ask:q,netscape:query,cnn:query,about:terms,mamma:q,voila:rdata,virgilio:qs,alice:qs,yandex:text,najdi:q,seznam:q,search:q,wp:szukaj,onet:qt,szukacz:q,yam:k,kvasir:q,ozu:q,terra:query,rambler:query".split(","),aQ=function(){return Math.round((new Date).getTime()/1000)},v=function(){return Math.round(Math.random()*2147483647)},X=function(){return v()^aj()&2147483647},k=function(){return U(al.domain)},aH=function(){var l={},g=ab.navigator,p=ab.screen;l.D=p?p.width+"x"+p.height:"-";l.C=p?p.colorDepth+"-bit":"-";l.language=(g&&(g.language||g.browserLanguage)||"-")[H]();l.javaEnabled=g&&g.javaEnabled()?1:0;l.characterSet=al.characterSet||al.charset||"-";return l},S=function(){var D,C,y,t;y="ShockwaveFlash";if((D=(D=window.navigator)?D.plugins:R)&&D[Q]>0){for(C=0;C<D[Q]&&!t;C++){y=D[C],y.name[w]("Shockwave Flash")>-1&&(t=y.description[J]("Shockwave Flash ")[1])}}else{y=y+"."+y;try{C=new ActiveXObject(y+".7"),t=C.GetVariable("$version")}catch(s){}if(!t){try{C=new ActiveXObject(y+".6"),t="WIN 6,0,21,0",C.AllowScriptAccess="always",t=C.GetVariable("$version")}catch(p){}}if(!t){try{C=new ActiveXObject(y),t=C.GetVariable("$version")}catch(l){}}t&&(t=t[J](" ")[1][J](","),t=t[0]+"."+t[1]+" r"+t[2])}var K=r.util.Vv("_r2");D=t?(t+(K[Q]>0?("_"+K[0]):"")):"-";var g=r.util.Vv("limgs");D=D+(g[Q]>0?("_"+g[0]):"");return D},ap=function(g){return R==g||"-"==g||""==g},U=function(l){var g=1,s=0,p;if(!ap(l)){g=0;for(p=l[Q]-1;p>=0;p--){s=l.charCodeAt(p),g=(g<<6&268435455)+s+(s<<14),s=g&266338304,g=s!=0?g^s>>21:g}}return g},aj=function(){var p=aH();for(var l=p,g=ab.navigator,l=g.appName+g.version+l.language+g.platform+g.userAgent+l.javaEnabled+l.D+l.C+(al.cookie?al.cookie:"")+(al.referrer?al.referrer:""),g=l.length,s=ab.history.length;s>0;){l+=s--^g++}return U(l)},an=function(){var s=window.jaq||[],p={};if(s instanceof Array){for(var l=0,g=s.length;l<g;l++){p[s[l][0]]=s[l][1]}}return p},Z=function(){var g={name:"other",version:"0"},s=navigator.userAgent.toLowerCase();browserRegExp={se360:/360se/,se360_2x:/qihu/,ie:/msie[ ]([\w.]+)/,firefox:/firefox[|\/]([\w.]+)/,chrome:/chrome[|\/]([\w.]+)/,safari:/version[|\/]([\w.]+)(\s\w.+)?\s?safari/,opera:/opera[|\/]([\w.]+)/};for(var p in browserRegExp){var l=browserRegExp[p].exec(s);if(l){g.name=p;g.version=l[1]||"0";break}}return g},G=function(){var g=/(win|android|linux|nokia|ipad|iphone|ipod|mac|sunos|solaris)/.exec(navigator.platform.toLowerCase());return g==null?"other":g[0]},aF=function(){var p="",y=["jwotest_product","jwotest_list","jwotest_cart","jwotest_orderinfo","jwotest_homepage","jwotest_other1","jwotest_other2","jwotest_other3"];for(var t=0,g=y.length;t<g;t++){var s=r.util.Vv(y[t]);if(s[Q]==0){continue}var C=ac(s[0]).match(/=(.*?)&/gi),l=[];if(C==null){continue}$.each(C,function(K,D){l.push(K==0?"T"+D.substring(1,D.length-1):D.substring(1,D.length-1))});p+=l[F]("-")+";"}return p},aD=function(l){l.set(ae,al.location.hostname);l.set(ah,al.title.replace(/\$/g,""));l.set(ax,al.location.pathname);l.set(aw,al.referrer.replace(/\$/g,""));l.set(aE,al.location.href);var C=r.util.Vv("__jda"),s=C[Q]>0?C[0][J]("."):null;l.set(ad,s?s[1]:X());l.set(i,s?s[2]:l.get(d));l.set(a,s?s[3]:l.get(d));l.set(aK,s?s[4]:l.get(d));l.set(av,s?s[5]:1);var t=r.util.Vv("__jdv"),g=t[Q]>0?t[0][J]("|"):null;l.set(f,g?g[1]:"direct");l.set(ar,g?g[2]:"-");l.set(c,g?g[3]:"none");l.set(ao,g?g[4]:"-");var y=r.util.Vv("__jdb"),p=y[Q]>0?y[0][J]("."):null;l.set(P,p?p[1]:0);l.set(b,aF()||"-");return !0},aB=function(){var l=r.util.Vv("__jdb"),g=l[Q]>0?l[0][J]("."):null;return(g&&g.length==4)?g[1]*1:0},aC=function(aW){var s=al.location.href,C=al.referrer,aT=aW.get(I),y=r.util.getParameter(s,"utm_source"),t=[],O=aW.get(f),L=aW.get(ar),K=aW.get(c),g=r.util.Vv("__jdb")[Q]==0;if(y){var l=r.util.getParameter(s,"utm_campaign"),aV=r.util.getParameter(s,"utm_medium"),W=r.util.getParameter(s,"utm_term");t[N](y);t[N](l||"-");t[N](aV||"-");t[N](W||"not set");aW.set(ao,t[3])}else{var p=C&&C[J]("/")[2],aU=false;if(p&&p[w](aT)<0){for(var aa=aW.get(aJ),au=0;au<aa.length;au++){var aS=aa[au][J](":");if(p[w](aS[0][H]())>-1&&C[w]((aS[1]+"=")[H]())>-1){var D=r.util.getParameter(C,aS[1]);t[N](aS[0]);t[N]("-");t[N]("organic");t[N](D||"not set");aW.set(ao,t[3]);aU=true;break}}if(!aU){if(p[w]("zol.com.cn")>-1){t[N]("zol.com.cn");t[N]("-");t[N]("cpc");t[N]("not set")}else{t[N](p);t[N]("-");t[N]("referral");t[N]("-")}}}}if(g||(!g&&t[Q]>0&&(t[0]!==O||t[1]!==L||t[2]!==K)&&t[2]!=="referral")){aW.set(f,t[0]||aW.get(f));aW.set(ar,t[1]||aW.get(ar));aW.set(c,t[2]||aW.get(c));aW.set(ao,t[3]||aW.get(ao));aq(aW)}else{h(aW)}},j=function(l,g){var p=g.split(".");l.set(i,p[2]);l.set(a,p[4]);l.set(aK,aQ());l.m(av);l.set(P,1)},E=function(l){var g=l.get(d);l.set(ad,X());l.set(i,g);l.set(a,g);l.set(aK,g);l.set(av,1);l.set(P,1)},h=function(g){g.m(P)},u=function(g){return[g.get(af),g.get(ad)||"-",g.get(i)||"-",g.get(a)||"-",g.get(aK)||"-",g.get(av)||1][F](".")},e=function(g){return[g.get(af),g.get(P)||1,g.get(ad)+"|"+g.get(av)||1,g.get(aK)||g.get(d)][F](".")},x=function(g){return[g.get(af),g.get(f)||al.domain,g.get(ar)||"(direct)",g.get(c)||"direct",g.get(ao)||"-"][F]("|")},aq=function(g){var l=r.util.Vv("__jda");l.length==0?E(g):j(g,l[0])};var q=new aM(),at=function(){this.a={};this.add=function(g,l){this.a[g]=l};this.get=function(g){return this.a[g]};this.toString=function(){return this.a[F]("&")}},o=function(l,g){g.add("jdac",l.get(ai)),g.add("jduid",l.get(ad)),g.add("jdsid",l.get(ad)+"|"+l.get(av)),g.add("jdje",l.get(n)),g.add("jdsc",l.get(M)),g.add("jdsr",l.get(z)),g.add("jdul",l.get(az)),g.add("jdcs",l.get(A)),g.add("jddt",l.get(ah)||"-"),g.add("jdmr",aA(l.get(aw))),g.add("jdhn",l.get(ae)||"-"),g.add("jdfl",l.get(aN)),g.add("jdos",l.get(B)),g.add("jdbr",l.get(Y)),g.add("jdbv",l.get(T)),g.add("jdwb",l.get(i)),g.add("jdxb",l.get(a)),g.add("jdyb",l.get(aK)),g.add("jdzb",l.get(av)),g.add("jdcb",l.get(P)),g.add("jdusc",l.get(f)||"direct"),g.add("jducp",l.get(ar)||"-"),g.add("jdumd",l.get(c)||"-"),g.add("jduct",l.get(ao)||"-"),g.add("jdlt",typeof jdpts!="object"?0:jdpts._st==undefined?0:l.get(aR)-jdpts._st),g.add("jdtad",l.get(b))},aP=function(l,g,p,s){g.add("jdac",l.get(ai)),g.add("jduid",l.get(ad)),g.add("jdsid",l.get(ad)+"|"+l.get(av)),g.add("jdje","-"),g.add("jdsc","-"),g.add("jdsr","-"),g.add("jdul","-"),g.add("jdcs","-"),g.add("jddt","-"),g.add("jdmr",aA(l.get(aw))),g.add("jdhn","-"),g.add("jdfl","-"),g.add("jdos","-"),g.add("jdbr","-"),g.add("jdbv","-"),g.add("jdwb","-"),g.add("jdxb","-"),g.add("jdyb","-"),g.add("jdzb",l.get(av)),g.add("jdcb",s?(aB()+s):l.get(P)),g.add("jdusc","-"),g.add("jducp","-"),g.add("jdumd","-"),g.add("jduct","-"),g.add("jdlt",0),g.add("jdtad",p)},aO=function(){aD(q)&&aC(q);var l=new at(),g=q.get(I);o(q,l);r.util.Wv("__jda",u(q),g,q.get(aI));r.util.Wv("__jdb",e(q),g,q.get(am));r.util.Wv("__jdc",q.get(af),g);r.util.Wv("__jdv",x(q),g,q.get(V));return l.a},ay=function(){var g=new at();o(q,g);return g.a};r.tracker={loading:function(s,p,l,t){var y=l&&(l.jdac+"||"+l.jdje+"||"+l.jdsc+"||"+l.jdsr+"||"+l.jdul+"||"+l.jdcs+"||"+aA(l.jddt)+"||"+l.jdhn+"||"+l.jdfl+"||"+l.jdos+"||"+l.jdbr+"||"+l.jdbv+"||"+l.jdwb+"||"+l.jdxb+"||"+l.jdyb+"||"+l.jdzb+"||"+l.jdcb+"||"+l.jdusc+"||"+l.jducp+"||"+l.jdumd+"||"+l.jduct+"||"+l.jdlt+"||"+l.jdtad);var g=("https:"==document.location.protocol?"https://cscssl":"http://csc")+".jd.com/log.ashx?type1="+aA(s)+"&type2="+aA(p)+"&pin="+aA(q.get(aL))+"&uuid="+l.jduid+"&sid="+l.jdsid+"&referrer="+aA(l.jdmr||"-")+"&jinfo="+y+"&data="+aA(JA.util.join(t))+"&callback=?";$.getJSON(g,function(){})},ngloader:function(p,D){var y="";for(var g in D){y+=((g+"="+D[g])+"$")}y=y.substring(0,y.length-1);var s=ay();var l=("https:"==document.location.protocol?"https://mercuryssl":"http://mercury")+".jd.com/log.gif?t="+p+"&m="+q.get(ai)+"&pin="+aA(q.get(aL))+"&uid="+s.jduid+"&sid="+s.jdsid+"&ref="+aA(al.referrer)+"&v="+aA(y)+"&rm="+(new Date).getTime();var C=new Image(1,1);C.src=l;C.onload=function(){C.onload=null;C.onerror=null};C.onerror=function(){C.onload=null;C.onerror=null}},bloading:function(p,g,s){var l=aO();this.loading(p,g,l,s);var t={je:l.jdje,sc:l.jdsc,sr:l.jdsr,ul:l.jdul,cs:l.jdcs,dt:l.jddt,hn:l.jdhn,fl:l.jdfl,os:l.jdos,br:l.jdbr,bv:l.jdbv,wb:l.jdwb,xb:l.jdxb,yb:l.jdyb,zb:l.jdzb,cb:l.jdcb,usc:l.jdusc,ucp:l.jducp,umd:l.jdumd,uct:l.jduct,lt:l.jdlt,ct:s,tad:l.jdtad};r.tracker.ngloader("www.100000",t)},aloading:function(p,l,s){var g=ay();this.loading(p,l,g,s)}};window.JA=r;r.tracker.bloading("J","A",new Date().getTime())})();function log(c,b){var a=Array.prototype.slice.call(arguments);a=a&&a.slice(2);JA&&JA.tracker.aloading(c,b,a);JA&&JA.tracker.ngloader("other.000000",{t1:c,t2:b,p0:encodeURIComponent(JA.util.join(a))})}function nlog(b,a){JA&&JA.tracker.ngloader(b,a)}function isMeta(b){if(b.metaKey||b.altKey||b.ctrlKey||b.shiftKey){return true}var c=b.which,a=b.button;if(!c&&a!==undefined){return(!a&1)&&(!a&2)&&(a&4)}else{if(c===2){return true}else{if(a===2){return true}}}return false}document.onclick=function(i){i=i||event;var c=document;var h=tag=i.srcElement||i.target;var l=$(tag).attr("clstag");while(!l){tag=tag.parentNode;if(!tag||(tag.nodeName=="BODY")){break}l=$(tag).attr("clstag")}if(l){var b=l.split("|"),a=b[1],f=b[2],g=b[3];if(a==="keycount"){log(f,g,"Q");if($(h).attr("href")&&$(h).attr("target")!=="_blank"&&!isMeta(i)){i.preventDefault?i.preventDefault():i.returnValue=false;setTimeout(function(){window.location.href=$(h).attr("href")},200)}}}};