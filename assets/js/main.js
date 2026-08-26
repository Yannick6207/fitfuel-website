const toggle=document.querySelector('.menu-toggle');
const nav=document.querySelector('.main-nav');
toggle?.addEventListener('click',()=>{const open=toggle.getAttribute('aria-expanded')==='true';toggle.setAttribute('aria-expanded',String(!open));nav.classList.toggle('open');document.body.classList.toggle('menu-open')});
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
