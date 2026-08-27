const toggle=document.querySelector('.menu-toggle');
const nav=document.querySelector('.main-nav');
const menuClose=document.querySelector('.menu-close');
const menuOverlay=document.querySelector('.menu-overlay');

function openMobileMenu(){
 if(!toggle||!nav||!menuOverlay)return;
 toggle.setAttribute('aria-expanded','true');
 toggle.setAttribute('aria-label','Menu sluiten');
 toggle.classList.add('is-hidden');
 nav.classList.add('open');
 menuOverlay.classList.add('show');
 document.body.classList.add('menu-open');
 menuClose?.focus();
}

function closeMobileMenu(){
 if(!toggle||!nav||!menuOverlay)return;
 const wasOpen=nav.classList.contains('open');
 toggle.setAttribute('aria-expanded','false');
 toggle.setAttribute('aria-label','Menu openen');
 toggle.classList.remove('is-hidden');
 nav.classList.remove('open');
 menuOverlay.classList.remove('show');
 document.body.classList.remove('menu-open');
 if(wasOpen)toggle.focus();
}

toggle?.addEventListener('click',()=>{
 if(nav?.classList.contains('open'))closeMobileMenu();
 else openMobileMenu();
});
menuClose?.addEventListener('click',closeMobileMenu);
menuOverlay?.addEventListener('click',closeMobileMenu);
nav?.querySelectorAll('a').forEach(link=>link.addEventListener('click',closeMobileMenu));
document.addEventListener('keydown',event=>{
 if(event.key==='Escape'&&nav?.classList.contains('open'))closeMobileMenu();
});
window.addEventListener('resize',()=>{
 if(window.innerWidth>1000&&nav?.classList.contains('open'))closeMobileMenu();
});
document.querySelectorAll('[data-filter]').forEach(button=>{button.addEventListener('click',()=>{document.querySelectorAll('[data-filter]').forEach(item=>item.classList.remove('active'));button.classList.add('active');document.querySelectorAll('.meal-card').forEach(card=>{card.hidden=!card.dataset.category.includes(button.dataset.filter)})})});
document.querySelectorAll('.newsletter form, .contact-form').forEach(form=>{form.addEventListener('submit',event=>{event.preventDefault();const button=form.querySelector('button');button.textContent='Bedankt!';button.disabled=true})});

const mapElement=document.getElementById('fitfuel-map');
if(mapElement&&window.L){
 const location=[52.3676,4.9041];
 const map=L.map(mapElement,{zoomControl:true,dragging:true,touchZoom:true,doubleClickZoom:true,keyboard:true,scrollWheelZoom:true}).setView(location,13);
 L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',{maxZoom:19,attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);
 const icon=L.divIcon({className:'fitfuel-map-marker',html:'<span></span>',iconSize:[34,44],iconAnchor:[17,44],popupAnchor:[0,-40]});
 L.marker(location,{icon,title:'FitFuel - Energieweg 12, Amsterdam'}).addTo(map).bindPopup('<strong>FitFuel</strong><br>Energieweg 12, Amsterdam<br><a href="https://www.google.com/maps/search/?api=1&query=Energieweg+12+Amsterdam" target="_blank" rel="noopener noreferrer">Route openen</a>').openPopup();
 requestAnimationFrame(()=>map.invalidateSize(true));
 window.addEventListener('resize',()=>map.invalidateSize(false));
}
