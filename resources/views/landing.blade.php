@extends('layouts.base')

@section('content')
<div class="preload">
    
  </div>

<section id="home">
  <nav>
    <div class="home-link">
      <a href="#home">RecipesBucket</a>
    </div>
    <ul>

      <li><a href="#contact">ЗВʼЯЗОК</a></li>
      <li><a href="#start">Про сайт</a></li>
      <li><a href="#suite">Ідея</a></li>
      <li><a href="#work">Початок</a></li>

    </ul>
  </nav>
  <div class="main-title">
    <div class="main-wrapper">
      <h1>Recipes<span class="header-bologna">Bucket</span></h1>
      <h1>Це міні соціальна мережа для обміну рецептами</h1>
    </div>   
    
</section>

<section id="work" >
  <h1 class="section-header">З чого варто розпочати?</h1>
  <div class="work-section">
    <p>Перш за все, варто ознайомитися з данною сторінкою. Тут розповідається про виникнення ідеї до створення RecipesBucket, та декілька слів про перспективи й подальші плани щодо вдосконалення ресурсу.</p>

    <h2 class="clients-text">Чому саме рецепти ?</h2>
    <p>Я часто переглядаю різні YouTube канали на кулінарну тематику, в основному читаю офіційні сайти зарубіжних журналів. Подобається хороша структурованість рецептів. Наявність сезонних підборок рецептів або підбірки по інгредієнтам блюда з грибів, картоплі, яблука тощо. Наявність об'єктивних коментарів до рецептів (не для всіх рецептів, звичайно). І, звичайно, наявність яскравих фото на блюд, без фото рецепта може і не залучити моєї уваги. :)</p>
  </div>
</section>

<section id="portfolio_break"></section>


<section id="suite">
  <h1 class="section-header" id="suite-header"></h1>
  <div class="suite-wrapper">
    <img src="{{ asset('images/landing/6.png') }}" alt="" class="suite-image"/>
    <div class="suite-text">
      <h1>Ідея проекту</h1>
      <p>Заперечувати те, що ми любимо смачно поїсти, я гадаю це безглуздо. Що приготувати? Над цим питанням щодня замислюються мільйони людей по всьому світу. Сподіваюся, рецепти цього кулінарного сайту допоможуть вирішити це питання вам сьогодні. На сайті ви знайдете цікаві повсякдені та святкові кулінарні рецепти, з докладними, покрокованими інструкціями. Якщо Ви не знайшли потрібного вам рецепту, написана мною "платформа" дозволяє створюрювати власні.</p>
    </div>
  </div>
</section>

<section class="suite-break"></section>

<section id="start">
  <h1 class="section-header" id="start-header"></h1>
  <div class="start-wrapper">
    <img src="{{ asset('images/landing/8.jpg') }}" alt="" class="start-image"/>
    <div class="start-text">
      <h1>Перспективи</h1>
      <p>На даний момент сайт дає можливіть користовачу реєструватися, преглядати рецепти та створювати свої власні. Користуючись особистими кабінетами, користувачі мають змогу дізнатися більше про автора того чи іншого рецепту, а також можливість дізнатися його контакти. Я вважаю, що проект RecipesBucket є цікавим та вартим уваги. У подальшому планую наповнити базу біьшою кількістю рецептів, зробити пошук страв по інгридієнтам та покращити дизайн сайту.</p>
    </div>
  </div>
</section>

<section class="bio-start"></section>



<section id="contact">
  <h1 class="section-header contact">зворотній звʼязок</h1>
  <div class="contact-wrapper">
    
    <form class="input">
      <input type="text" class="name" name="name" placeholder="імʼя">
    </form>
    
    <form class="input">
      <input type="text" class="email" name="email" placeholder="пошта">
    </form>
    
    <div class="textarea">
      <textarea rows="10" cols="100" placeholder="повідомлення"></textarea>
    </div>
    
    <button id="submit">надіслати</button>
    
    <div class="copyright">&copy; Italent.org.ua</div>
    
  </div>
  
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="{{ asset('js/landing.js') }}"></script>
@endsection