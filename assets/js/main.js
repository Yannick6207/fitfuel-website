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
const filterButtons=[...document.querySelectorAll('[data-filter]')];
const mealCards=[...document.querySelectorAll('.meal-card[data-category]')];

if(filterButtons.length&&mealCards.length){
 function applyMealFilter(filter,{updateUrl=false}={}){
  const activeButton=filterButtons.find(button=>button.dataset.filter===filter);
  if(!activeButton)return;

  filterButtons.forEach(button=>button.classList.toggle('active',button===activeButton));
  mealCards.forEach(card=>{
   card.hidden=!card.dataset.category.split(' ').includes(filter);
  });

  if(updateUrl){
   const url=new URL(window.location.href);
   if(filter==='all')url.searchParams.delete('filter');
   else url.searchParams.set('filter',filter);
   window.history.replaceState(null,'',url);
  }
 }

 filterButtons.forEach(button=>button.addEventListener('click',()=>applyMealFilter(button.dataset.filter,{updateUrl:true})));
 const requestedFilter=new URLSearchParams(window.location.search).get('filter');
 if(requestedFilter)applyMealFilter(requestedFilter);
}
document.querySelectorAll('.newsletter form, .contact-form').forEach(form=>{form.addEventListener('submit',event=>{event.preventDefault();const button=form.querySelector('button');button.textContent='Bedankt!';button.disabled=true})});

const recipeModal=document.getElementById('recipe-modal');
const recipesElement=document.getElementById('meal-recipes');
let activeMealCard=null;

if(recipeModal&&recipesElement){
 const recipes=JSON.parse(recipesElement.textContent);
 const dialog=recipeModal.querySelector('.recipe-dialog');
 const closeButton=recipeModal.querySelector('.recipe-dialog__close');
 const modalImage=recipeModal.querySelector('.recipe-dialog__image img');
 const title=recipeModal.querySelector('#recipe-title');
 const ingredients=recipeModal.querySelector('#recipe-ingredients');
 const preparation=recipeModal.querySelector('#recipe-preparation');

 function closeRecipe(){
  if(recipeModal.hidden)return;
  recipeModal.hidden=true;
  document.body.classList.remove('recipe-open');
  activeMealCard?.focus();
 }

 function openRecipe(card){
  const recipe=recipes[Number(card.dataset.mealIndex)];
  if(!recipe)return;

  activeMealCard=card;
  title.textContent=recipe.name;
  modalImage.src=`assets/images/${recipe.image}`;
  modalImage.alt=recipe.name;
  ingredients.replaceChildren(...recipe.ingredients.map(item=>{
   const listItem=document.createElement('li');
   listItem.textContent=item;
   return listItem;
  }));
  preparation.textContent=recipe.preparation;
  recipeModal.querySelector('[data-nutrition="calories"]').textContent=recipe.calories;
  recipeModal.querySelector('[data-nutrition="protein"]').textContent=`${recipe.protein}g`;
  recipeModal.querySelector('[data-nutrition="carbs"]').textContent=`${recipe.carbs}g`;
  recipeModal.querySelector('[data-nutrition="fat"]').textContent=`${recipe.fat}g`;

  recipeModal.hidden=false;
  document.body.classList.add('recipe-open');
  dialog.focus();
 }

 document.querySelectorAll('.meal-card[data-meal-index]').forEach(card=>{
  card.addEventListener('click',()=>openRecipe(card));
  card.addEventListener('keydown',event=>{
   if(event.key==='Enter'||event.key===' '){
    event.preventDefault();
    openRecipe(card);
   }
  });
 });
 closeButton.addEventListener('click',closeRecipe);
 recipeModal.querySelector('.recipe-modal__backdrop').addEventListener('click',closeRecipe);
 document.addEventListener('keydown',event=>{
  if(recipeModal.hidden)return;
  if(event.key==='Escape')closeRecipe();
  if(event.key==='Tab'){
   event.preventDefault();
   closeButton.focus();
  }
 });
}

const articleModal=document.getElementById('article-modal');
const articleTriggers=[...document.querySelectorAll('.article-read-more[data-article-index]')];
let activeArticleTrigger=null;

if(articleModal&&articleTriggers.length){
 const articleDialog=articleModal.querySelector('.article-dialog');
 const articleClose=articleModal.querySelector('.article-dialog__close');
 const articleBackdrop=articleModal.querySelector('.article-modal__backdrop');
 const articleCategory=articleModal.querySelector('#article-dialog-category');
 const articleTitle=articleModal.querySelector('#article-dialog-title');
 const articleBody=articleModal.querySelector('#article-dialog-body');

 function closeArticle(){
  if(articleModal.hidden)return;
  articleModal.hidden=true;
  document.body.classList.remove('article-open');
  articleBody.replaceChildren();
  activeArticleTrigger?.focus();
 }

 function openArticle(trigger){
  const template=document.getElementById(`article-content-${trigger.dataset.articleIndex}`);
  const card=trigger.closest('article');
  const category=card?.querySelector(':scope > div:last-child > span');
  const title=card?.querySelector('h2');
  if(!template||!category||!title)return;

  activeArticleTrigger=trigger;
  articleCategory.textContent=category.textContent;
  articleTitle.textContent=title.textContent;
  articleBody.replaceChildren(template.content.cloneNode(true));
  articleBody.scrollTop=0;
  articleModal.hidden=false;
  document.body.classList.add('article-open');
  articleDialog.focus();
 }

 articleTriggers.forEach(trigger=>trigger.addEventListener('click',()=>openArticle(trigger)));
 articleClose.addEventListener('click',closeArticle);
 articleBackdrop.addEventListener('click',closeArticle);
 document.addEventListener('keydown',event=>{
  if(articleModal.hidden)return;
  if(event.key==='Escape')closeArticle();
  if(event.key==='Tab'){
   event.preventDefault();
   articleClose.focus();
  }
 });
}

const mealBuilderModal=document.getElementById('meal-builder-modal');
const openMealBuilder=document.getElementById('open-meal-builder');

if(mealBuilderModal&&openMealBuilder){
 const builderDialog=mealBuilderModal.querySelector('.meal-builder-dialog');
 const builderClose=mealBuilderModal.querySelector('.meal-builder-dialog__close');
 const builderForm=mealBuilderModal.querySelector('.meal-builder-form');
 const builderSubmit=mealBuilderModal.querySelector('.builder-submit');
 const confirmation=mealBuilderModal.querySelector('.builder-confirmation');
 const optionButtons=[...mealBuilderModal.querySelectorAll('[data-builder-option]')];

 function updateMealBuilder(){
  const selected=optionButtons.filter(option=>option.getAttribute('aria-pressed')==='true');
  const totals={calories:0,protein:0,carbs:0,fat:0};

  selected.forEach(option=>{
   mealBuilderModal.querySelector(`[data-selection="${option.dataset.group}"]`).textContent=option.dataset.name;
   Object.keys(totals).forEach(nutrient=>{
    totals[nutrient]+=Number(option.dataset[nutrient]);
   });
  });

  Object.entries(totals).forEach(([nutrient,value])=>{
   mealBuilderModal.querySelector(`[data-builder-nutrition="${nutrient}"]`).textContent=nutrient==='calories'?value:`${value}g`;
  });
  confirmation.hidden=true;
  builderSubmit.textContent='Voeg mijn maaltijd toe';
 }

 function closeMealBuilder(){
  if(mealBuilderModal.hidden)return;
  mealBuilderModal.hidden=true;
  document.body.classList.remove('builder-open');
  openMealBuilder.focus();
 }

 function openBuilder(){
  mealBuilderModal.hidden=false;
  document.body.classList.add('builder-open');
  builderDialog.focus();
 }

 optionButtons.forEach(option=>{
  option.addEventListener('click',()=>{
   optionButtons.filter(item=>item.dataset.group===option.dataset.group).forEach(item=>{
    const isSelected=item===option;
    item.classList.toggle('selected',isSelected);
    item.setAttribute('aria-pressed',String(isSelected));
   });
   updateMealBuilder();
  });
 });

 openMealBuilder.addEventListener('click',openBuilder);
 builderClose.addEventListener('click',closeMealBuilder);
 mealBuilderModal.querySelector('.recipe-modal__backdrop').addEventListener('click',closeMealBuilder);
 builderForm.addEventListener('submit',event=>{
  event.preventDefault();
  builderSubmit.textContent='Maaltijd toegevoegd \u2713';
  confirmation.hidden=false;
 });
 document.addEventListener('keydown',event=>{
  if(mealBuilderModal.hidden)return;
  if(event.key==='Escape')closeMealBuilder();
  if(event.key==='Tab'){
   const focusable=[...mealBuilderModal.querySelectorAll('button:not([disabled])')];
   const first=focusable[0];
   const last=focusable[focusable.length-1];
   if(event.shiftKey&&document.activeElement===first){
    event.preventDefault();
    last.focus();
   }else if(!event.shiftKey&&document.activeElement===last){
    event.preventDefault();
    first.focus();
   }
  }
 });
}

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
