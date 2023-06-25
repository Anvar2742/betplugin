@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts())
    @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  @include("partials.custom-pagination")
  
<div class="lorem">
  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis itaque quidem, non recusandae ratione expedita quo, corrupti incidunt veritatis quod iusto perspiciatis illo qui beatae, animi earum vel sequi excepturi?
  Aliquam voluptates amet beatae, odio neque necessitatibus labore voluptatum ipsam voluptate adipisci deserunt harum perferendis! Quaerat quod fugiat ipsum esse voluptate distinctio ut dolore neque, quas maiores quam totam aliquid.
  Illo laboriosam quisquam quae culpa. Cupiditate, fugit natus asperiores laborum nam similique sit repudiandae reprehenderit sint sequi maxime soluta alias ipsam velit, atque aperiam repellat distinctio cum vitae vel rerum?
  Fugiat vero quisquam deserunt voluptatibus, tempora, at mollitia minus omnis temporibus, similique veniam vitae quam. Perferendis, magnam, illo fugit ullam ut cupiditate vel deleniti, pariatur aliquam dignissimos et eum natus.
  Atque recusandae corporis, aut debitis aliquam consectetur perferendis beatae, fugiat ipsum ab in magni saepe similique rem consequuntur aspernatur quas eligendi iste id odit perspiciatis? Quasi iusto corporis magni voluptatem.
  Temporibus, excepturi? Odit sunt sit inventore suscipit laudantium maxime commodi laborum incidunt quas, autem obcaecati eum et corporis a minima voluptate eos aliquam quaerat voluptas hic illo optio pariatur consequuntur?
  Quis porro saepe eius rem repellat dolores aut corrupti quidem eos adipisci doloribus optio autem repudiandae sunt, temporibus ipsa nihil fuga vitae id qui? Quos provident aperiam excepturi molestiae quo.
  Tempora, architecto cumque fugit perferendis accusamus odit aspernatur eum dignissimos commodi laboriosam. Explicabo maiores quia, deleniti sapiente ullam magnam nesciunt iusto eos molestiae perspiciatis! Itaque, totam. Nulla ipsam qui eaque!
  Doloremque, quis itaque delectus possimus corrupti tempore voluptas exercitationem iure. Minus cupiditate numquam quo mollitia quis? Impedit odio facilis, qui mollitia, iste, tenetur ratione quidem laudantium error nulla omnis officiis.
  Ullam incidunt, aperiam officiis beatae obcaecati quo, eligendi aliquid ab expedita nam fugit in qui itaque aut asperiores. Corporis culpa repellat placeat similique maiores temporibus natus molestias obcaecati totam laudantium!
  Laborum magnam asperiores natus, quae unde quos culpa? Quis dolor veritatis corrupti esse nulla enim laudantium magni inventore aut voluptates, repellendus quas quaerat optio eveniet sit eos minus labore veniam!
  Est sunt iure quasi, quod rerum corporis vitae ad tempore ipsum similique repudiandae deserunt quae doloribus. Inventore beatae explicabo magni debitis praesentium soluta incidunt illo excepturi, quasi necessitatibus, blanditiis aperiam.
  Quisquam eos ipsam iste rem exercitationem ducimus modi delectus qui distinctio dolorem nobis magnam molestiae natus maxime molestias nemo quis, sequi mollitia vel? Repellat cupiditate vero animi necessitatibus dolor alias!
  Ducimus reiciendis veritatis exercitationem maxime sed adipisci dolores ad minima, laborum ratione deserunt repellat, quod voluptatum obcaecati, eligendi recusandae tenetur. Nemo autem excepturi unde. Maiores quasi ex voluptatibus culpa non?
  Ab, accusantium? Odit ipsum quaerat, debitis quo quisquam assumenda sunt magnam quidem placeat obcaecati, impedit culpa distinctio incidunt minima minus soluta esse quod! Odit explicabo sunt repellendus error ipsam impedit.
  Accusamus pariatur laborum ratione eius libero quidem voluptatibus commodi eveniet eligendi eum ab labore mollitia ullam sequi, optio alias culpa? Saepe, quam quod. Laborum neque officia voluptatem perspiciatis ut accusamus.
  Dolor minima rem porro. Adipisci at porro, sit culpa, eveniet in ratione doloribus, consequuntur ullam accusantium temporibus reprehenderit molestias nam. Veniam molestiae autem, eaque incidunt recusandae velit quasi quae accusamus?
  Iure ipsum reprehenderit dolore harum dolores voluptatum incidunt! In et rem accusamus ad eligendi assumenda rerum voluptates magni. Officiis voluptate id eum mollitia reprehenderit labore, eveniet consequuntur voluptatum tempora cum!
  Labore distinctio delectus vitae rem magni ipsa praesentium quis hic explicabo facilis, culpa maiores animi cum eius neque voluptas eligendi. Fugit esse asperiores architecto sunt a enim iste ipsum aliquam.
  Veniam ut deserunt veritatis, provident consectetur ipsam quidem voluptatem porro, a quisquam nam cupiditate excepturi distinctio numquam, laudantium perspiciatis ipsa facilis consequatur recusandae adipisci consequuntur explicabo error sequi sit! Aperiam.
  Alias repellat perspiciatis ipsa rerum delectus cum maiores cumque optio, sit veniam praesentium earum, eos vitae quisquam vel inventore. Voluptatum ad minus delectus! Doloremque dicta at consectetur eveniet sed hic!
  Aliquam, sint. Quis maxime voluptate tempore explicabo molestias dolorem praesentium alias commodi error, dolores perspiciatis modi veritatis temporibus molestiae aspernatur in. Quas ratione magni rem iste illo obcaecati quibusdam laborum!
  Similique, nulla aspernatur fuga quis, amet exercitationem incidunt illum vel quo delectus, molestiae quam temporibus? Cupiditate debitis ab magnam iusto similique illo, neque distinctio quidem nesciunt eaque nemo totam. Ducimus.
  Esse ut explicabo consequatur repellendus officia officiis dolore error vitae doloremque quae. Eligendi ab velit, cum autem iure voluptate aliquam magni minima rem voluptas explicabo sapiente hic odio quae? Excepturi.
  Culpa, vitae alias voluptas veritatis harum quo aliquid pariatur cupiditate, laborum sunt facere sint praesentium nesciunt tempore sit provident, perferendis placeat dolorum ducimus temporibus? Placeat ex animi pariatur aliquam similique?
  Fuga accusantium, nulla, ducimus necessitatibus expedita magnam eius labore nobis obcaecati nihil placeat fugit repellat repellendus magni iure delectus dolorum, itaque molestiae consequatur consectetur illo suscipit. Deleniti in nemo similique.
  Cum, cupiditate nihil in repudiandae, sint dolor, quis expedita perferendis quos commodi nesciunt vero dolore deserunt reiciendis nobis eum modi reprehenderit saepe cumque. Mollitia et aliquid architecto. Repellendus, reiciendis. Sequi.
  Rerum nemo officiis iusto, rem accusamus ea numquam modi tempore sunt repellendus libero, fugit placeat fugiat similique distinctio aspernatur excepturi odit! Nobis debitis voluptate dignissimos esse facere eveniet amet assumenda.
  Nisi culpa rem suscipit eos numquam ipsum accusantium quibusdam consequuntur quisquam, eius obcaecati quidem eum, nostrum esse consectetur. Quasi consequatur tempora rerum veritatis harum deserunt iusto voluptate officiis incidunt odio!
  Magnam voluptates asperiores atque ipsum excepturi libero illo possimus eaque consequuntur repellat dolores vitae quasi non doloremque quam enim, facilis, repellendus fuga iste laborum numquam. Tempora voluptate itaque reprehenderit suscipit!
  Itaque facere officiis veniam maiores tempora eius nobis vel esse recusandae sit, quidem modi autem error enim nam in blanditiis qui libero, voluptatibus cumque! Blanditiis temporibus maiores neque pariatur saepe.
  Ea asperiores accusamus doloremque temporibus in. Voluptatibus dolor ex reprehenderit laborum quos magni excepturi quasi asperiores fugiat aliquam commodi ratione ullam, eum velit, in harum rerum tempore beatae quibusdam sunt.
  Molestias nesciunt ex ut exercitationem, sapiente quos ullam eveniet recusandae provident qui porro maxime eum corporis beatae ipsa possimus tempora, nisi alias unde vitae. Id magnam laborum ullam dicta eum!
  Blanditiis eveniet, provident sunt fugiat nam asperiores excepturi neque maxime numquam rem, obcaecati modi ducimus porro. Autem temporibus impedit amet distinctio, et odio numquam fuga eligendi tempore. Nobis, in aut!
  Itaque tempore ipsum aliquam non odit ex, sint perspiciatis earum praesentium voluptatibus voluptatem, labore culpa beatae omnis nemo rem eius. Veniam quos corporis consectetur ut hic, optio expedita tempore nihil.
  Reprehenderit, corporis veniam aspernatur voluptatem odit doloribus dolores in animi fugit consequatur alias dolorum tempore ipsa mollitia, id a cumque facere nulla expedita repellendus? Quae praesentium velit culpa quas placeat!
  Nisi obcaecati doloribus ipsam atque corrupti aliquid corporis, mollitia optio? Officia ullam recusandae itaque vel. Labore provident delectus obcaecati ratione cupiditate omnis aliquam cumque voluptates et doloremque, ipsum recusandae minus?
  Molestiae temporibus voluptatibus perspiciatis veritatis, quos commodi ipsam numquam reprehenderit sequi nam saepe dolore necessitatibus nemo quisquam sapiente quis molestias vitae? Inventore vel mollitia culpa obcaecati blanditiis totam sunt consequuntur?
  Quam maiores aspernatur, obcaecati iure labore esse provident itaque cupiditate ab necessitatibus molestias in. Atque reprehenderit iste minus enim numquam, adipisci, beatae sed commodi deleniti culpa vero quam quo vitae?
  Dolorem id veritatis doloremque quas totam nulla sunt suscipit, enim facilis itaque adipisci harum, quam dicta ipsum numquam velit? Adipisci voluptatem nesciunt placeat molestiae eius deserunt explicabo perferendis dolorum odit!
  Quisquam veniam sint assumenda iure commodi a exercitationem nobis sapiente vel! Alias obcaecati velit laboriosam reprehenderit ducimus id similique, tempore ad magnam, ex, illo a sed error eius dignissimos non.
  Similique rem molestiae odit sed rerum minima natus deleniti quo adipisci fugit! Officiis quae incidunt nam tempora suscipit dolorem facere asperiores? Id amet blanditiis doloremque, velit ipsam corporis deleniti in!
  Minima maiores nihil sequi aliquam praesentium voluptatibus natus accusamus quis. Illo eos cupiditate debitis obcaecati earum harum itaque. Nulla quibusdam, assumenda doloribus possimus minus perferendis expedita vitae repudiandae dolore laborum!
  Laborum eveniet qui cumque tempora. Iste inventore quis ex obcaecati quos iure, consectetur voluptas illo minima dignissimos saepe totam provident. Pariatur, eius maxime nesciunt possimus quidem aspernatur ullam sed nisi!
  Modi porro cumque architecto corporis mollitia nihil labore soluta distinctio asperiores nisi dolorem pariatur eos nemo incidunt quos eveniet laboriosam excepturi a veritatis sit, saepe accusantium. Ipsum rerum in sunt.
  Culpa excepturi earum debitis animi reiciendis non voluptatum voluptas assumenda quam modi autem, hic ipsum sit nemo ipsa, tempora sed quibusdam accusantium mollitia eligendi. Alias, facere architecto! Est, esse corporis.
  Ipsa, ab maiores? Consequuntur consectetur libero iusto deleniti delectus minus quisquam voluptatem, veritatis voluptate illo accusantium, excepturi blanditiis quo perspiciatis facere. Ducimus id architecto quas sequi vero omnis minus cumque.
  Qui officiis delectus quae ea, hic, esse eligendi a, distinctio modi neque mollitia fugit? Esse beatae in reprehenderit quasi repellat consequuntur illo dolorem similique, quis doloribus asperiores possimus, enim aut!
  Porro, nihil. Quam minus magni ut ullam, fugit debitis nam dolores similique modi amet non temporibus ipsam nihil distinctio, optio a cum, quo omnis voluptatum. Omnis distinctio accusantium est expedita.
  Vitae dolorem, assumenda suscipit quos sed debitis explicabo, sequi labore eos sapiente perspiciatis, enim ipsam atque. Minus dicta sequi sint ipsam fugit pariatur neque at ex, corrupti ut nihil architecto.
  Beatae obcaecati explicabo, minus distinctio ullam placeat nobis laudantium earum eaque in iste soluta expedita! Minus, eveniet provident debitis porro perferendis ducimus praesentium laborum ab corporis nulla. In, voluptatibus doloremque.
  Facilis distinctio natus modi vitae, doloremque neque labore, non, dolorem officia impedit pariatur illum aspernatur eius delectus eligendi minus. Consequuntur perspiciatis temporibus eligendi repellat, mollitia sint nihil! Sapiente, officia est.
  Iure recusandae quibusdam voluptatum, nisi, perferendis error vitae iste in consequuntur voluptas suscipit quae. Cupiditate est ipsa atque eius, aspernatur corrupti ullam delectus velit animi consequuntur. Culpa quam saepe assumenda?
  Mollitia culpa labore laboriosam distinctio accusamus deleniti excepturi, expedita dignissimos ad fuga, nulla perspiciatis? Nisi ex at fugiat eaque explicabo, eligendi incidunt, adipisci eum consequatur aut blanditiis officiis saepe tempora?
  Totam modi temporibus quia sapiente consequatur expedita fugiat labore impedit quibusdam, ipsam dignissimos eius suscipit sed corrupti voluptatem, obcaecati quo voluptatibus provident officia. Harum laudantium quos est fuga voluptatibus itaque.
  Nemo tempora veniam sed sunt. Eligendi saepe quod eum iste eaque libero labore suscipit, distinctio maxime quibusdam, cumque voluptatibus molestias a. Dolores fuga neque inventore placeat suscipit reprehenderit, exercitationem ab?
  Consequuntur sapiente consectetur quidem alias officia quod voluptatem. Exercitationem voluptatum veritatis fuga obcaecati similique vel quas, voluptas nostrum voluptate sequi sint quis consequatur error, sit iste deleniti molestias eius ipsum!
  Exercitationem officia consequatur tenetur odio nobis a natus! Corporis molestias recusandae veritatis nobis! Sapiente accusamus consectetur doloribus ex reprehenderit nihil et autem magnam, repellat eligendi corrupti quod, illo neque asperiores.
  Eius animi minus quaerat consequuntur rem nobis blanditiis temporibus, soluta est vel nesciunt tenetur in harum qui ab dignissimos labore quasi sit architecto perspiciatis at deserunt. Aspernatur voluptas a velit.
  Eveniet eum officia similique, perspiciatis vero odio quos obcaecati quae odit, ea laboriosam! Non, maxime. Vero perspiciatis, aspernatur magni natus sequi, voluptatum illum pariatur, deleniti voluptas fugit dolorem tenetur consequuntur.
  Ipsum dicta facilis optio laborum autem quis dignissimos assumenda deleniti dolorem doloribus neque molestias error tenetur voluptates sint, ea consequatur blanditiis, aliquid in minima. Soluta dolore sequi magnam tempora porro?
  Deleniti quis sequi quo officiis excepturi voluptas debitis cumque sint sapiente iusto ab ipsa odit facere veritatis temporibus, repudiandae corrupti illum impedit. Dolorum dolor cum excepturi reiciendis voluptas alias doloribus?
  Expedita quae perferendis, aut voluptatem repellendus enim saepe fugiat magni corrupti quos dignissimos, fugit ducimus eius accusamus dolore cum repudiandae suscipit dolorum neque a. Inventore natus eum ab modi maxime?
  Possimus, reprehenderit ratione ut eaque praesentium voluptas ex quibusdam omnis voluptates? Provident quaerat voluptatum laboriosam dolores ea aliquid earum nesciunt repellendus eaque blanditiis similique suscipit recusandae corporis, iste distinctio. Eum!
  Consectetur beatae minus sunt incidunt similique necessitatibus? Est accusantium labore fugiat, autem non aspernatur quia porro atque, molestiae soluta temporibus vitae quis perferendis beatae vero dignissimos totam quibusdam eaque ab.
  Incidunt consequatur quae vitae animi doloremque neque deleniti reprehenderit a temporibus. Ea illo maiores beatae! Eveniet incidunt nemo quas deserunt! Nihil distinctio aspernatur eos quidem ex qui. Voluptas, aspernatur! Placeat?
  Beatae minus velit voluptatum modi laborum doloribus, dolores quo a deserunt quia sit voluptates expedita hic cum ad recusandae voluptatibus sequi reprehenderit accusamus aspernatur ab eos placeat nesciunt! In, non.
  Sint, inventore cupiditate aut enim cumque atque est quod aliquam amet quidem nostrum temporibus maiores? Laborum quo rem iure voluptate mollitia animi, recusandae illum itaque odio dolor! Nesciunt, eligendi. Error.
  Optio non esse suscipit nulla dolores eius, fugit totam numquam voluptas, quidem nemo illum, a facere blanditiis ut illo reprehenderit officia in autem excepturi? Accusantium culpa vitae quasi impedit in?
  Reiciendis facere mollitia optio nulla. Vero consequuntur nemo mollitia ea nisi aspernatur amet a tempore quae recusandae perspiciatis sint ab ut sequi aliquam, laudantium quaerat perferendis. Voluptatem dicta magnam nulla?
  Alias quibusdam nesciunt rem corporis. At eveniet quod quidem similique, obcaecati voluptatum doloribus sit repellendus praesentium ex ipsam laborum assumenda officiis nihil libero perspiciatis quaerat, iure modi reiciendis dolores? Eaque?
  Sint optio sed maxime reprehenderit expedita eius autem deserunt distinctio nisi repellendus ex culpa molestias, doloremque, a consectetur facere. Asperiores unde ullam nobis repellendus. Facere esse quas eius adipisci quae?
  Accusamus laboriosam cupiditate recusandae nostrum est veniam iusto? Laudantium dolor illo fugiat quaerat saepe, incidunt numquam doloribus, velit molestiae similique commodi? Perferendis, sequi! Fuga, vero? Expedita aspernatur perspiciatis dolor possimus?
  Ipsa id molestiae iusto eum minima architecto explicabo et dicta, voluptatem impedit quibusdam voluptates a. Animi eos doloremque amet laudantium. Provident nesciunt fuga deleniti eius omnis tenetur reprehenderit quo officia.
  Reiciendis ipsam laudantium possimus doloremque voluptatem inventore perferendis animi odit quaerat, quae nesciunt eaque quos repudiandae, dolores numquam voluptate ut cumque facere quas in distinctio nemo! Officia molestiae rem maxime!
  Tenetur esse, perspiciatis fuga illum possimus aliquam, deleniti numquam expedita dolorem facere quibusdam excepturi enim hic veritatis labore dolore fugit quam sint quidem non et quas placeat! Consequuntur, perspiciatis tempora?
  Eligendi natus aut eaque doloribus fugiat recusandae neque provident ullam sit odio tenetur omnis iste hic nulla, consequatur labore asperiores dignissimos nam. Nesciunt, ab laudantium aperiam repudiandae dolores eum libero?
  Voluptas repellendus quasi, vero velit veritatis expedita nulla incidunt esse cumque natus aperiam beatae nemo consectetur, excepturi architecto quo iste reprehenderit, saepe dignissimos sed. Mollitia ad repellendus fugiat corporis minima?
  Illo consequatur mollitia vitae voluptatem! Hic culpa iste maxime libero illum! Odit similique voluptates, nesciunt nam totam, corporis at delectus vel recusandae asperiores animi, sit nobis nulla accusamus veniam explicabo.
  Et reprehenderit voluptatem enim nemo culpa numquam ipsam ad? Facere pariatur excepturi itaque sequi quos unde quibusdam enim ullam quae, ad voluptatum quas nulla, sit delectus velit, totam reprehenderit nam.
  Culpa deserunt dolores et quod explicabo consequatur, dolorum possimus repellat minima accusantium, optio nihil aspernatur quis modi a sed quia voluptatum iure ea voluptate doloribus, incidunt facilis molestiae vel? Porro?
  Iure aliquid assumenda cumque. Commodi, officiis similique. Laboriosam cumque voluptate alias ea doloribus et magnam? Odit minima quas in laboriosam eaque ipsam eos eius ipsa atque! Id cumque commodi dolores.
  Doloremque quos vero eum, sit et sequi neque consectetur minima corporis quo, aspernatur earum est! Expedita debitis ratione quaerat repellendus, unde tempore ea laudantium, ad laborum amet nam eveniet quisquam?
  Fugiat repudiandae, quis recusandae asperiores, eaque incidunt iste illo quam at minus perspiciatis quia libero nesciunt. Dolores explicabo iusto recusandae magni assumenda eum quia iste illo. Veritatis asperiores voluptates illo.
  Repudiandae ab fugiat alias, rem nostrum deserunt! Illum aliquam accusamus soluta ratione officiis consequatur iste voluptatum hic eligendi autem saepe quod deleniti quas voluptate ipsa neque, placeat nam facere voluptatem?
  Impedit expedita enim aperiam dolore iste sint odio at, commodi cum adipisci facilis cupiditate neque! Fuga dignissimos voluptate temporibus, quod quae ab accusamus veniam quis mollitia non vel omnis neque!
  Quia error nam nobis quibusdam, aspernatur tempore cupiditate nisi accusantium quisquam, sed magnam? Tempore quo numquam fuga placeat. Nihil, architecto expedita! Quo quidem quas praesentium consectetur explicabo maxime debitis rem!
  Fugiat repellendus provident praesentium consequuntur? Vitae, ab! Doloribus omnis non nemo laboriosam inventore minima at deserunt consequuntur obcaecati voluptatum ullam, hic, optio adipisci voluptate asperiores maiores doloremque ea accusamus illum.
  Possimus dolore quo aliquid porro quia sed voluptas perferendis ullam deserunt? Unde doloribus esse error aliquid cum omnis, vero sit ad in voluptas beatae, alias suscipit. Quos nemo possimus magni.
  Repellendus harum et error aliquid earum cum ad, dolorum, commodi deserunt a laborum voluptate at cumque itaque. Molestias ipsa aliquam quidem at, earum beatae molestiae qui eligendi quaerat soluta doloremque.
  Iusto ab officia animi! Molestias eaque labore tempore quidem neque, deleniti qui facere eligendi amet veniam voluptate esse corrupti mollitia nulla similique aliquid facilis molestiae dolor sint fugit quos? Omnis?
  Minima enim excepturi magnam, quo fugit pariatur totam sunt saepe! Laudantium adipisci porro modi maxime qui illo, alias rerum magni. Magnam, quaerat. Esse odio quis nam. Voluptatem dolorum expedita dolore!
  Expedita illum labore non ea necessitatibus sed dolorum vel distinctio, iusto corrupti aliquam deleniti nobis pariatur reiciendis quam nesciunt nisi aperiam consequuntur ratione ab eum quibusdam. Non quisquam culpa sapiente?
  Assumenda ducimus facilis ab ullam ratione odio eius laboriosam optio, incidunt placeat aspernatur voluptatibus! Ipsum laboriosam itaque voluptate a molestias magnam harum, veritatis quas veniam nesciunt tempore vero nam quae.
  Culpa harum unde accusamus odio molestiae animi, facere voluptatum quo, excepturi illum adipisci impedit pariatur magnam architecto consequuntur vel ullam, dolorum non reprehenderit ut aperiam illo natus assumenda commodi! Similique.
  Dolore eaque velit quo sint porro quae illo vero, rem iusto consectetur ea similique cum distinctio hic molestiae minima. Velit, optio unde! Alias consequatur velit fugit dolor minima numquam voluptate.
  Molestiae voluptatem placeat impedit deserunt delectus quis perspiciatis sint aperiam est nemo unde deleniti earum in sunt quisquam eaque ipsa libero nisi illum consequuntur repudiandae tempora numquam, eum cumque. Iure.
  Nihil possimus sed quia, ipsa dolores minima quidem quisquam voluptate. Quasi eveniet culpa accusantium quibusdam fugit non asperiores delectus, dolore, omnis officiis saepe maiores nemo facilis libero assumenda facere sit?
  Error facere sit nemo, tenetur officiis non quae, consequuntur, ipsa autem quidem vitae eius nostrum perspiciatis pariatur eum iure nesciunt recusandae et! Neque nemo odio sequi fugit sint, magnam aliquam.
  Quidem quisquam deserunt, fuga consequatur quod voluptas beatae. Ullam corrupti minima explicabo pariatur? Officiis, blanditiis nostrum explicabo, rem dicta, inventore autem quae tempora cupiditate quam aut sunt alias sapiente a.
</div>

@endsection

@section('sidebar')
  @include('partials.products-widget')
@endsection
