(function(){
  var b=document.querySelector('.burger'),n=document.getElementById('nav');
  if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');});
  // Live watch hands + header clock
  var h=document.getElementById('h-hour'),m=document.getElementById('h-min'),s=document.getElementById('h-sec'),c=document.getElementById('hdr-clock');
  function pad(x){return (x<10?'0':'')+x;}
  function tick(){
    var d=new Date(),hr=d.getHours(),mi=d.getMinutes(),se=d.getSeconds()+d.getMilliseconds()/1000;
    if(h)h.setAttribute('transform','rotate('+((hr%12)*30+mi*0.5)+' 150 150)');
    if(m)m.setAttribute('transform','rotate('+(mi*6+se*0.1)+' 150 150)');
    if(s)s.setAttribute('transform','rotate('+(Math.floor(se*8)/8*6)+' 150 150)'); // 8 beats per second, like a 28,800 vph movement
    if(c)c.innerHTML=pad(hr)+'<span>:</span>'+pad(mi)+'<span>:</span>'+pad(Math.floor(se));
  }
  if(h||c){tick();setInterval(tick,125);}
  // Cookie
  var k=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('rv_cookie');}catch(e){}
  if(k&&!v)k.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('rv_cookie',x.dataset.cookie);}catch(e){}k.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();
