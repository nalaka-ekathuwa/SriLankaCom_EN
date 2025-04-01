<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- OG tags for most social media -->
    <meta property="og:title" content="Sri Lanka Commercial Tour">
    <meta property="og:description"
        content="Explore the amazing corners of Sri Lanka with us. We organize unforgettable tours that will give you vivid impressions and unique emotions.">
    <meta property="og:image" content="https://srilankacomtours.com/images/logo.png">
    <meta property="og:url" content="https://srilankacomtours.com/">

    <!-- tweeter cards for tweeter -->
    <meta name="twitter:card" content="Travel with us">
    <meta name="twitter:title" content="Sri Lanka Commercial Tour">
    <meta name="twitter:description"
        content="Explore the amazing corners of Sri Lanka with us. We organize unforgettable tours that will give you vivid impressions and unique emotions.">
    <meta name="twitter:image" content="https://srilankacomtours.com/images/logo.png">

    <!-- standard description meta -->
    <meta name="description"
        content="Explore the amazing corners of Sri Lanka with us. We organize unforgettable tours that will give you vivid impressions and unique emotions.">


    <title>Sri Lanka Com Tour - Your Travel Partner</title>
    <!--<title>Sri Lanka Com - Travel Partner</title>-->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!--Font Awesome-->
    <!-- <link rel="stylesheet" href="../../ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="../../ajax/libs/font-awesome/5.11.2/css/all.min.css"> -->

    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css">
</head>

<?php
// Prevent Clickjacking
header('X-Frame-Options: SAMEORIGIN');

// // Protect Against XSS
header('X-XSS-Protection: 1; mode=block');

// // Content Type Enforcement
header('X-Content-Type-Options: nosniff');

// // Enforce HTTPS
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');

// // Content Security Policy (CSP)
// header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; object-src 'none';");

// // Referrer Policy
header('Referrer-Policy: no-referrer');

// // Permissions Policy
header("Permissions-Policy: geolocation=(), microphone=()");

$testimonial = array(
    array(
        "img" => "images/testimonial/img1.jpg",
        "description" => "Мое путешествие с этим агентством было незабываемым! Всё было организовано идеально, гиды профессиональны, а маршруты очень интересные. Я обязательно обращусь сюда снова!",
        "name" => "Саша",
        "title" => "Путешественник"
    ),
    array(
        "img" => "images/testimonial/img2.jpg",
        "description" => "Моя поездка с Суханом была великолепной! Он был не только отличным гидом, но и сделал мое путешествие по-настоящему увлекательным. Его знания истории и культуры превзошли все мои ожидания. Обязательно порекомендую его своим друзьям!",
        "name" => "Анастасия",
        "title" => "Путешественник"
    ),
    array(
        "img" => "images/testimonial/img3.jpg",
        "description" => "Сухан был невероятным гидом! Его профессионализм, знания и внимание к деталям сделали мое путешествие незабываемым. Я с радостью порекомендую его всем, кто хочет получить лучший опыт путешествий!",
        "name" => "Татьяна",
        "title" => "Путешественник"
    )
);

$guides = array(
    array(
        "img" => "images/team/Suhan.jpg",
        "name" => "Сухан",
        "title" => "Гид, говорящий по-русски"
        // "title" => "Russian Speaking Guide"

    ),
    array(
        "img" => "images/team/kaai.jpg",
        "name" => "Кани",
        "title" => "Гид, говорящий по-русски"
        // "title" => "Russian Speaking Guide"

    ),
    array(
        "img" => "images/team/maaga.jpg",
        "name" => "Мага",
        "title" => "Гид, говорящий по-русски"
        // "title" => "Russian Speaking Guide"

    )
);

$destinations = array(
    array(
        "img" => "images/destination/ella.jpg",
        "name" => "ЭЛЛА",
        "type" => "Тур 1",
        "place" => "Ува, Бадулла",
        "gallery1" => "images/destination/ella-2.jpg",
        "gallery2" => "images/destination/ella-3.jpg",
        //"gallery3" => "images/destination/trending6.jpg",
        "feature" => "images/destination/trending7.jpg",
        "description" => "Элла — это живописный горный городок в Шри-Ланке, известный своими чайными плантациями, водопадами и потрясающими видами. Это идеальное место для пеших прогулок и наслаждения природой.",
        // "description" => "Ella is a picturesque mountain town in Sri Lanka, known for its tea plantations, waterfalls, and breathtaking views. It is an ideal place for hiking and enjoying nature."
        "map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31689.68456692534!2d81.02674732512371!3d6.86535116889241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae465955bc09a25%3A0xbdfadcdadec487fb!2sElla!5e0!3m2!1sen!2slk!4v1738349963987!5m2!1sen!2slk",
        "des_id" => "1111"
    ),
    array(
        "img" => "images/destination/nuwaraeliya.jpg",
        "name" => "НУВАРА ЭЛИЯ",
        "type" => "Тур 2",
        "place" => "Округ Нувара-Элия",
        "gallery1" => "images/destination/Nuwara-eliya-02.jpg",
        "gallery2" => "images/destination/Nuwara-eliya-03.jpg",
        "feature" => "images/destination/trending7.jpg",
        "description" => "Нувара-Элия — это живописный город в горах Шри-Ланки, известный своими чайными плантациями, прохладным климатом и британской колониальной архитектурой. Это идеальное место для отдыха на природе, посещения водопадов и дегустации свежезаваренного цейлонского чая.",
        // "description" => "Nuwara Eliya is a scenic mountain town in Sri Lanka, known for its tea plantations, cool climate, and British colonial architecture. It is the perfect place for nature retreats, visiting waterfalls, and enjoying freshly brewed Ceylon tea."
        "map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63367.83067425247!2d80.73974682938619!3d6.951449623122183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae380434e1554c7%3A0x291608404c937d9c!2sNuwara%20Eliya!5e0!3m2!1sen!2slk!4v1738401653733!5m2!1sen!2slk",
        "des_id" => "1112"
    ),
    array(
        "img" => "images/destination/kandy.jpg",
        "name" => "КАНДИ",
        "type" => "Тур 3",
        "place" => "Центральная провинция, Канди",
        "gallery1" => "images/destination/Kandy002.jpg",
        "gallery2" => "images/destination/Kandy003.jpg",
        "feature" => "images/destination/trending7.jpg",
        "description" => "Канди — это культурная столица Шри-Ланки, известная Храмом Зуба Будды, живописным озером и богатым наследием. Город окружен зелеными холмами и является центром буддизма на острове.",
        // "description" => "Kandy is the cultural capital of Sri Lanka, known for the Temple of the Tooth, its scenic lake, and rich heritage. The city is surrounded by lush green hills and serves as a center for Buddhism on the island."

        "map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.418063613644!2d80.5845812801045!3d7.2946285733754666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!1sen!2slk!4v1738401728848!5m2!1sen!2slk",
        "des_id" => "1113"
    ),
    array(
        "img" => "images/destination/galle.jpg",
        "name" => "Галле",
        "type" => "Тур 4",
        "place" => "Южная провинция, Галле",
        "gallery1" => "images/destination/galle02.jpg",
        "gallery2" => "images/destination/galle03.jpg",
        "feature" => "images/destination/trending7.jpg",
        "description" => "Галле — это очаровательный прибрежный город Шри-Ланки, известный своим колониальным фортом, внесённым в список наследия ЮНЕСКО. Узкие улочки, старинные здания и потрясающие виды на океан делают его одним из самых живописных мест на острове.",
        // "description" => "Galle is a charming coastal city in Sri Lanka, known for its colonial-era fort, a UNESCO World Heritage site. Narrow streets, historic buildings, and stunning ocean views make it one of the most picturesque places on the island."
        "map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63480.83754039442!2d80.17079687775808!3d6.055975350635329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!5e0!3m2!1sen!2slk!4v1738401537379!5m2!1sen!2slk",
        "des_id" => "1114"
    ),
    array(
        "img" => "images/destination/hortanpaints.jpg",
        "name" => "Хортон Плейнс",
        "type" => "Тур 5",
        "place" => "Центральное плато, Хортон Плейнс",
        "gallery1" => "images/destination/HortanPaints02.jpg",
        "gallery2" => "images/destination/HortanPaints03.jpg",
        "feature" => "images/destination/trending7.jpg",
        "description" => "Национальный парк Хортон Плейнс — это одно из самых живописных мест Шри-Ланки, известное своими зелеными лугами, туманными лесами и потрясающим утесом Конец света. Это идеальное место для пеших прогулок и наблюдения за дикой природой.",
        // "description" => "Horton Plains National Park is one of the most scenic locations in Sri Lanka, known for its rolling grasslands, misty forests, and the breathtaking World's End cliff. It's the perfect destination for hiking and wildlife spotting."
        "map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6739945881313!2d80.79975837373183!3d6.809451319776925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3882edb4b78ef%3A0xcebca89153777249!2sHorton%20Plains%20National%20Park!5e0!3m2!1sen!2slk!4v1738349707151!5m2!1sen!2slk",
        "des_id" => "1115"
    ),
    array(
        "img" => "images/destination/arugambay.jpg",
        "name" => "Аругам-Бэй",
        "type" => "Тур 6",
        "place" => "Восточная провинция, Аругам-Бэй",
        "gallery1" => "images/destination/arugambay002.jpg",
        "gallery2" => "images/destination/arugambay003.jpg",
        "feature" => "images/destination/trending7.jpg",
        "description" => "Аругам-Бэй — одно из лучших мест для серфинга в Шри-Ланке, привлекающее любителей волн со всего мира. Здесь также можно насладиться золотыми пляжами, живописными лагунами и богатой дикой природой.",
        // "description" => "Arugam Bay is one of the best surfing destinations in Sri Lanka, attracting wave lovers from all over the world. It also offers golden beaches, scenic lagoons, and rich wildlife."

        "map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31691.516031705734!2d81.80557067511026!3d6.837793273085368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae5bd26f6a1ccd7%3A0xb934be79f3ce3515!2sArugam%20Bay!5e0!3m2!1sen!2slk!4v1738401847226!5m2!1sen!2slk",
        "des_id" => "1116"
    ),
    array(
        "img" => "images/destination/hikkaduwa.jpg",
        "name" => "Хиккадува",
        "type" => "Тур 7",
        "place" => "Южная провинция, Хиккадува",
        "gallery1" => "images/destination/Hikakduwa02.jpg",
        "gallery2" => "images/destination/Hikkaduwa03.jpg",
        "feature" => "images/destination/trending7.jpg",
        "description" => "Хиккадува — это популярный курортный город, известный своими красивыми пляжами, коралловыми рифами и активной ночной жизнью. Здесь можно заняться дайвингом, снорклингом и просто насладиться расслабляющей атмосферой у моря.",
        // "description" => "Hikkaduwa is a popular resort town known for its beautiful beaches, coral reefs, and vibrant nightlife. It offers great opportunities for diving, snorkeling, and enjoying a relaxing seaside atmosphere."

        "map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31736.176594974422!2d80.09843192479289!3d6.127731627855934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae177fbcae7226d%3A0x373eeb50aad15308!2sHikkaduwa!5e0!3m2!1sen!2slk!4v1738401926890!5m2!1sen!2slk",
        "des_id" => "1117"
    ),
    array(
        "img" => "images/destination/anuradhapura.jpg",
        "name" => "Анурадхапура",
        "type" => "Тур 8",
        "place" => "Северо-Центральная провинция, Анурадхапура",
        "gallery1" => "images/destination/Anuradhapura002.jpg",
        "gallery2" => "images/destination/Anuradhapura03.jpg",
        "feature" => "images/destination/trending7.jpg",
        "description" => "Анурадхапура — древняя столица Шри-Ланки и важнейший центр буддизма. Здесь можно увидеть величественные ступы, храмы и знаменитое священное дерево Бодхи, которое считается старейшим в мире.",
        // "description" => "Anuradhapura is the ancient capital of Sri Lanka and a major center of Buddhism. Visitors can explore grand stupas, temples, and the famous sacred Bodhi tree, believed to be the oldest in the world."

        "map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126325.51655856307!2d80.32091042763697!3d8.335313210601862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcf4f99360e159%3A0xc111fe9ebc6dcf0e!2sAnuradhapura!5e0!3m2!1sen!2slk!4v1738401990097!5m2!1sen!2slk",
        "des_id" => "1118"
    ),
    array(
        "img" => "images/destination/dabulla.jpg",
        "name" => "Дамбулла",
        "type" => "Тур 9",
        "place" => "Центральная провинция, Дамбулла",
        "gallery1" => "images/destination/dabulla02.jpg",
        "gallery2" => "images/destination/dabulla003.jpg",
        "feature" => "images/destination/trending7.jpg",
        "description" => "Дамбулла — это древний город, известный своим Пещерным храмом, крупнейшим и самым хорошо сохранившимся храмовым комплексом в Шри-Ланке. Здесь можно увидеть уникальные буддийские фрески и статуи, возраст которых превышает 2000 лет. Кроме того, Дамбулла предлагает захватывающие полеты на воздушном шаре, с которых открываются потрясающие виды на исторические и природные достопримечательности региона.",
        // "description" => "Dambulla is an ancient city known for its Cave Temple, the largest and best-preserved temple complex in Sri Lanka. Visitors can admire unique Buddhist frescoes and statues that are over 2000 years old. Additionally, Dambulla offers breathtaking hot air balloon rides, providing stunning views of the region’s historical and natural landmarks."
        "map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252936.28686807977!2d80.5347403031834!3d7.8815186785571205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcaff4c8adcc4f%3A0x67ae3cc5b1536914!2sDambulla!5e0!3m2!1sen!2slk!4v1738402066673!5m2!1sen!2slk",
        "des_id" => "1119"
    )
);

$tours = array(
    [
        "tour_id" => "1234", //1234 start here 
        "img" => "images/trending/ella.jpg",
        "package" => "2-дневные туры",
        "place" => "Элла, Шри-Ланка",
        "carousel" => [
            "Равана водопад",
            "Элла рок",
            "Элла маленький пик Адама",
            "девятиарочный мост",
            "поездка на поезде"
        ],
        "carousel_interval" => "2000",
        "title" => "ЧАО ШРИ ЛАНКА",
        "description" => "Откройте для себя лучшие туристические маршруты и насладитесь незабываемыми приключениями вместе с нами!",
        "price" => "$170.00",
        "price_tag" => "За человека",
        "days" => "2 дня",
        "people" => "Макс: 16, мин: 8 человек",
        "period" => "2 дня",
        "min_age" => "Мин. возраст: 5+",
        "pickup" => "Трансфер: Аэропорт",
        "language" => "Язык: Только русский",

        // tour detail page attributes from here
        "desc_long" => "ЧАО ШРИ-ЛАНКА — это незабываемое путешествие по лучшим местам острова. Вы посетите знаменитые чайные плантации, захватывающие горные пейзажи и исторические достопримечательности. Путешествие включает поездку на поезде с потрясающими видами, прогулку по Девятиарочному мосту, посещение Малого Пика Адама, храма Золотого Будды и многое другое. У вас будет возможность попробовать лучшие сорта цейлонского чая, увидеть старинные колониальные здания и насладиться шведским столом в уютной гостинице с видом на водопад.",
        // "desc_long" => "CIAO SRI LANKA is an unforgettable journey through the best places on the island. You will visit famous tea plantations, breathtaking mountain landscapes, and historical landmarks. The tour includes a scenic train ride, a walk along the Nine Arches Bridge, a visit to Little Adam's Peak, the Golden Buddha Temple, and much more. You will have the opportunity to taste the best varieties of Ceylon tea, see colonial-era buildings, and enjoy a buffet dinner in a cozy hotel overlooking a waterfall.",

        "tour_guide" => "Наш русскоговорящий гид проведет вас через самые впечатляющие места Шри-Ланки, расскажет интересные исторические факты и поделится местными традициями. Он сделает вашу поездку комфортной, увлекательной и безопасной, помогая вам создать незабываемые воспоминания о путешествии.",
        // "tour_guide" => "Our Russian-speaking guide will take you through the most impressive places in Sri Lanka, share interesting historical facts, and introduce you to local traditions. He will make your trip comfortable, exciting, and safe, helping you create unforgettable memories of your journey."
        "accrodion" => [
            [
                "day" => "<span>День 1</span>",
                "activity" => "День 1<br>
✅ Выезд из отеля около 3:00 ночи, время может меняться в зависимости от расположения отеля.<br>
🏞️ Подъем на Малый Пик Адама (30 минут).<br>
🐵 Кормление обезьян.<br>
💦 Посещение водопада Равана.<br>
🌉 Прогулка по Девятиарочному мосту.<br>
🛤️ Поездка на поезде (~1 час) с потрясающими видами на горы. Именно здесь делаются знаменитые фото со Шри-Ланки (участок между Демодара и Харутале).<br>
🏙️ Обзорный тур по городу Нувара-Элия. По желанию можно отправить открытки домой со старинной колониальной почты.<br>
🍵 Посещение чайной плантации и фабрики: дегустация 12 видов чая, знакомство с процессом производства от сбора до упаковки, возможность сделать красивые фото с корзинами на чайной плантации.<br>
🍽️ Ужин (шведский стол).<br>
🏨 Ночевка в гостинице Отель Рамбода Фоллс (балкончики с панорамным видом на водопад).",

                // "activity" => "Day 1<br>
                // ✅ *Departure from the hotel around 3:00 AM*, (time may vary depending on hotel location).<br>
                // 🏞️ *Climb Little Adam’s Peak* (30 minutes).<br>
                // 🐵 *Monkey feeding.*<br>
                // 💦 *Visit Ravana Waterfall.*<br>
                // 🌉 *Walk across the Nine Arches Bridge.*<br>
                // 🛤️ *Scenic train ride (~1 hour) with breathtaking mountain views.* Perfect for capturing iconic Sri Lanka photos (Demodara to Hatton section).<br>
                // 🏙️ *Sightseeing tour of Nuwara Eliya.* Option to send postcards home from a historic colonial-era post office.<br>
                // 🍵 *Visit a tea plantation and factory:* taste **12 varieties of tea**, learn about the production process from picking to packaging, and take stunning photos with tea baskets.<br>
                // 🍽️ *Dinner (buffet).*<br>
                // 🏨 *Overnight stay at Rambodafall Hotel* (balcony rooms with panoramic waterfall views)."


            ],
            [
                "day" => "<span>День 2</span>",
                "activity" => "День 2<br>
🍽️ Завтрак (шведский стол).<br>
🗼 Восхождение на башню Амбулувава.<br>
🙏 Посещение Золотого храма Дамбулла.<br>
🏰 Сигирия или Пидурангала – выбор за вами.<br>
🛏️ Возвращение в отель около 23:00 (время может изменяться).<br><br>

<b>✅ Включено:</b><br>
🚐 Трансферы из/в отель (забираем из всех отелей южного побережья).<br>
🚗 Все трансферы по программе.<br>
🗣️ Русскоговорящий гид.<br>
🎟️ Все входные билеты по программе.<br>
🏨 Ночевка в гостинице.<br>
🍽️ Питание: ужин и завтрак.<br><br>

<b>❌ Не включено:</b><br>
🍲 Обеды.<br>
🛏️ Доплата за одноместное размещение +20$.<br><br>

<b>🎒 Возьмите с собой:</b><br>
🥐 Завтрак (закажите в отеле).<br>
🧢 Головной убор и солнцезащитный крем.<br>
💵 Деньги на личные расходы.<br>
👗 Женщинам: одежду, закрывающую колени и плечи (для посещения храмов).<br>
👙 Купальники (если позволит погода, можно искупаться в водопадах).<br><br>

<b>🎁 Комплимент:</b><br>
💧 Вода.",

                // "activity" => "Day 2<br>
                // 🍽️ *Breakfast (buffet).*<br>
                // 🗼 *Climb Ambuluwawa Tower.*<br>
                // 🙏 *Visit the Golden Temple of Dambulla.*<br>
                // 🏰 *Sigiriya or Pidurangala – the choice is yours.*<br>
                // 🛏️ *Return to the hotel around 11:00 PM (time may vary).*<br><br>

                // <b>✅ Included:</b><br>
                // 🚐 *Transfers from/to the hotel (pick-up from all South Coast hotels).*<br>
                // 🚗 *All transfers according to the itinerary.*<br>
                // 🗣️ *Russian-speaking guide.*<br>
                // 🎟️ *All entrance tickets according to the program.*<br>
                // 🏨 *Hotel accommodation.*<br>
                // 🍽️ *Meals: dinner and breakfast.*<br><br>

                // <b>❌ Not included:</b><br>
                // 🍲 *Lunches.*<br>
                // 🛏️ *Extra charge for single-room accommodation +$20.*<br><br>

                // <b>🎒 What to bring:</b><br>
                // 🥐 *Breakfast (order at your hotel).*<br>
                // 🧢 *Headwear and sunscreen.*<br>
                // 💵 *Money for personal expenses.*<br>
                // 👗 *Women: clothing covering knees and shoulders (for temple visits).*<br>
                // 👙 *Swimwear (if the weather allows, we can swim in the waterfalls).*<br><br>

                // <b>🎁 Complimentary:</b><br>
                // 💧 *Water.*"


            ],
            // [
            //     "day" => "<span>Day 3</span> - Barcelona - Zaragoza - Madrid",
            //     "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
            //                         veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
            //                         voluptatem.",
            // ],
            // [
            //     "day" => "<span>Day 4</span> - Barcelona - Zaragoza - Madrid",
            //     "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
            //                         veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
            //                         voluptatem.",
            // ],
        ],
        'included' => [],
        'excluded' => [],
        "map" => '<iframe src="https://www.google.com/maps/embed?pb=!1m38!1m12!1m3!1d507470.2263102231!2d80.19006563720914!3d6.443949006422721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m23!3e0!4m3!3m2!1d6.891948999999999!2d79.93603!4m5!1s0x3ae465955bc09a25%3A0xbdfadcdadec487fb!2sElla!3m2!1d6.8666988!2d81.046553!4m5!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!3m2!1d6.032894799999999!2d80.2167912!4m5!1s0x3ae25bd88b39d365%3A0x7557b8cc495d29f3!2sAir%20Force%20Headquarters%20Officer&#39;s%20Mess%2C%20A4%2C%20Colombo!3m2!1d6.897223299999999!2d79.86022059999999!5e0!3m2!1sen!2slk!4v1738511436358!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        "review" => [
            [
                "img" => "images/reviewer/1.jpg",
                "name" => "Дмитрий",
                "date" => "25 апреля 2024 в 10:46 утра",
                "subject" => "Райское путешествие",
                "messege" => "Полюбуйтесь культовым горизонтом и посетите знаковые места, которые вы раньше видели только по телевизору. Откройте для себя лучшие районы и насладитесь атмосферой города.",

                // "name" => "Dimitri",
                // "date" => "April 25, 2022 at 10:46 am",
                // "subject" => "Heaven travel",
                // "messege" => "Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood."
            ],
            [
                "img" => "images/reviewer/3.jpg",
                "name" => "Борис",
                "date" => "25 апреля 2024 в 10:46 утра",
                "subject" => "Лучшие гиды",
                "messege" => "Полюбуйтесь культовым горизонтом и посетите знаковые места, которые вы раньше видели только по телевизору. Исследуйте удивительные уголки города и насладитесь незабываемыми моментами.",

                // "name" => "Boris",
                // "date" => "April 25, 2024 at 10:46 am",
                // "subject" => "Wonderful guiders ever",
                // "messege" => "Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood."
            ],

        ],
    ],
    [
        "tour_id" => "1235",
        'img' => 'images/trending/ella_2.jpg',
        'package' => '2-дневные туры',
        "place" => "Элла, Шри-Ланка",
        'title' => 'Чао, Аморе ШриЛанка',
        'description' => 'Наслаждайтесь комфортом и уникальными впечатлениями в каждом путешествии, которое мы организуем для вас.',
        'price' => '$170.00',
        'price_tag' => 'За человека',
        "days" => "2 дня",
        "people" => "Макс: 16, мин: 8 человек",
        "period" => "2 дня",
        "min_age" => "Мин. возраст: 5+",
        "pickup" => "Трансфер: Аэропорт",
        "language" => "Язык: Только русский",
        'carousel' => ['национальный парк Хортон-Плейнс', 'парк moons plains', 'Чайная плантация', 'Чайная фабрика', 'старая почта', 'Грегори Парк', 'парк Виктория', 'клубничная ферма'],
        'carousel_interval' => '2000',
        "desc_long" => "Accumsan ullamcorper theophrastus mel ei, pri id esse facer iudico. Et modus debitis fastidii mea. In saperet reprehendunt nec, gubergren scribentur has cu, ius ne graeco cetero vocibus. <br> Ex tation populo utamur usu.Eros munere eu quo. Usu cu quando intellegebat conclusionemque, quas timeam qui an, integre accumsan torquatos an his. Malorum menandri vim ne. Sea euismod quaerendum ad, et his aeterno consectetuer interpretaris. Mea ut dicam ornatus invenire.",
        "tour_guide" => "Accumsan ullamcorper theophrastus mel ei, pri id esse facer iudico. Et modus debitis fastidii mea. In saperet reprehendunt nec, gubergren scribentur has cu, ius ne graeco cetero vocibus. <br> Ex tation populo utamur usu.Eros munere eu quo. Usu cu quando intellegebat conclusionemque, quas timeam qui an, integre accumsan torquatos an his. Malorum menandri vim ne. Sea euismod quaerendum ad, et his aeterno consectetuer interpretaris. Mea ut dicam ornatus invenire.",
        "accrodion" => [
            [
                "day" => "<span>Day 1</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
            [
                "day" => "<span>Day 2</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
            [
                "day" => "<span>Day 3</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
            [
                "day" => "<span>Day 4</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
        ],
        'included' => ['храм зуба будды', 'королевский ботанический сад', 'башня амбулувава', 'экскурсия по городу кандий', 'традиционное танцевальное шоу'],
        'excluded' => ['храм зуба будды', 'королевский ботанический сад', 'башня амбулувава', 'экскурсия по городу кандий', 'традиционное танцевальное шоу'],
        "map" => '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31690.400991395116!2d81.03238057511842!3d6.854584320531723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3ae465955bc09a25%3A0xbdfadcdadec487fb!2sElla!3m2!1d6.8666988!2d81.046553!4m5!1s0x3ae46566989736b1%3A0x7723c32995403b9c!2sR3R3%2BCWP%20Ravana%20waterfall%2C%20Wellawaya-Ella-Kumbalwela%20Hwy%2C%20Ella!3m2!1d6.841092!2d81.054831!5e0!3m2!1sen!2slk!4v1738431996296!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        "review" => [
            [
                "img" => "images/reviewer/1.jpg",
                "name" => "Konstanthinu De Sa",
                "date" => "April 25, 2022 at 10:46 am",
                "subject" => "Heaven travel pako",
                "messege" => "Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.",
            ],
            [
                "img" => "images/reviewer/2.jpg",
                "name" => "Jeranimo De Asavedu",
                "date" => "April 25, 2022 at 10:46 am",
                "subject" => "Wonderful guiders ever",
                "messege" => "Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.",
            ],
        ]
    ],
    [
        "tour_id" => "1236",
        'img' => 'images/trending/tiptop.jpg',
        'package' => '2-дневные туры',
        "place" => "Элла, Шри-Ланка",
        'title' => 'Тип Топ Шри Ланка',
        'description' => 'Откройте для себя невероятную природу, богатую культуру и гостеприимство Шри Ланки с нами.',
        'price' => '$170.00',
        'price_tag' => 'За человека',
        "days" => "2 дня",
        "people" => "Макс: 16, мин: 8 человек",
        "period" => "2 дня",
        "min_age" => "Мин. возраст: 5+",
        "pickup" => "Трансфер: Аэропорт",
        "language" => "Язык: Только русский",
        'carousel' => ['храм зуба будды', 'королевский ботанический сад', 'башня амбулувава', 'экскурсия по городу кандий', 'традиционное танцевальное шоу'],
        'carousel_interval' => '2000',
        "desc_long" => "Accumsan ullamcorper theophrastus mel ei, pri id esse facer iudico. Et modus debitis fastidii mea. In saperet reprehendunt nec, gubergren scribentur has cu, ius ne graeco cetero vocibus. <br> Ex tation populo utamur usu.Eros munere eu quo. Usu cu quando intellegebat conclusionemque, quas timeam qui an, integre accumsan torquatos an his. Malorum menandri vim ne. Sea euismod quaerendum ad, et his aeterno consectetuer interpretaris. Mea ut dicam ornatus invenire.",
        "tour_guide" => "Accumsan ullamcorper theophrastus mel ei, pri id esse facer iudico. Et modus debitis fastidii mea. In saperet reprehendunt nec, gubergren scribentur has cu, ius ne graeco cetero vocibus. <br> Ex tation populo utamur usu.Eros munere eu quo. Usu cu quando intellegebat conclusionemque, quas timeam qui an, integre accumsan torquatos an his. Malorum menandri vim ne. Sea euismod quaerendum ad, et his aeterno consectetuer interpretaris. Mea ut dicam ornatus invenire.",
        "accrodion" => [
            [
                "day" => "<span>Day 1</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
            [
                "day" => "<span>Day 2</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
            [
                "day" => "<span>Day 3</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
            [
                "day" => "<span>Day 4</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
        ],
        'included' => ['храм зуба будды', 'королевский ботанический сад', 'башня амбулувава', 'экскурсия по городу кандий', 'традиционное танцевальное шоу'],
        'excluded' => ['храм зуба будды', 'королевский ботанический сад', 'башня амбулувава', 'экскурсия по городу кандий', 'традиционное танцевальное шоу'],
        "map" => '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31690.400991395116!2d81.03238057511842!3d6.854584320531723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3ae465955bc09a25%3A0xbdfadcdadec487fb!2sElla!3m2!1d6.8666988!2d81.046553!4m5!1s0x3ae46566989736b1%3A0x7723c32995403b9c!2sR3R3%2BCWP%20Ravana%20waterfall%2C%20Wellawaya-Ella-Kumbalwela%20Hwy%2C%20Ella!3m2!1d6.841092!2d81.054831!5e0!3m2!1sen!2slk!4v1738431996296!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        "review" => [
            [
                "img" => "images/reviewer/3.jpg",
                "name" => "Konstanthinu De Sa",
                "date" => "April 25, 2022 at 10:46 am",
                "subject" => "Heaven travel",
                "messege" => "Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.",
            ],
            [
                "img" => "images/reviewer/2.jpg",
                "name" => "Jeranimo De Asavedu",
                "date" => "April 25, 2022 at 10:46 am",
                "subject" => "Wonderful guiders ever",
                "messege" => "Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.",
            ],
        ]
    ],
    [
        "tour_id" => "1237",
        'img' => 'images/trending/trending2.jpg',
        'package' => '29 Days Tours',
        "place" => "Элла, Шри-Ланка",
        'title' => 'Piazza Castello',
        'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum',
        'price' => '$170.00',
        'price_tag' => 'За человека',
        "days" => "2 дня",
        "people" => "Макс: 16, мин: 8 человек",
        "period" => "2 дня",
        "min_age" => "Мин. возраст: 5+",
        "pickup" => "Трансфер: Аэропорт",
        "language" => "Язык: Только русский",
        'carousel' => ['Croatia 1', 'Croatia 2', 'Croatia 3'],
        'carousel_interval' => '2000',
        "desc_long" => "Accumsan ullamcorper theophrastus mel ei, pri id esse facer iudico. Et modus debitis fastidii mea. In saperet reprehendunt nec, gubergren scribentur has cu, ius ne graeco cetero vocibus. <br> Ex tation populo utamur usu.Eros munere eu quo. Usu cu quando intellegebat conclusionemque, quas timeam qui an, integre accumsan torquatos an his. Malorum menandri vim ne. Sea euismod quaerendum ad, et his aeterno consectetuer interpretaris. Mea ut dicam ornatus invenire.",
        "tour_guide" => "Accumsan ullamcorper theophrastus mel ei, pri id esse facer iudico. Et modus debitis fastidii mea. In saperet reprehendunt nec, gubergren scribentur has cu, ius ne graeco cetero vocibus. <br> Ex tation populo utamur usu.Eros munere eu quo. Usu cu quando intellegebat conclusionemque, quas timeam qui an, integre accumsan torquatos an his. Malorum menandri vim ne. Sea euismod quaerendum ad, et his aeterno consectetuer interpretaris. Mea ut dicam ornatus invenire.",
        "accrodion" => [
            [
                "day" => "<span>Day 1</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
            [
                "day" => "<span>Day 2</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
            [
                "day" => "<span>Day 3</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
            [
                "day" => "<span>Day 4</span> - Barcelona - Zaragoza - Madrid",
                "activity" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque
                                    veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit
                                    voluptatem.",
            ],
        ],
        'included' => ['храм зуба будды', 'королевский ботанический сад', 'башня амбулувава', 'экскурсия по городу кандий', 'традиционное танцевальное шоу'],
        'excluded' => ['храм зуба будды', 'королевский ботанический сад', 'башня амбулувава', 'экскурсия по городу кандий', 'традиционное танцевальное шоу'],
        "map" => '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31690.400991395116!2d81.03238057511842!3d6.854584320531723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3ae465955bc09a25%3A0xbdfadcdadec487fb!2sElla!3m2!1d6.8666988!2d81.046553!4m5!1s0x3ae46566989736b1%3A0x7723c32995403b9c!2sR3R3%2BCWP%20Ravana%20waterfall%2C%20Wellawaya-Ella-Kumbalwela%20Hwy%2C%20Ella!3m2!1d6.841092!2d81.054831!5e0!3m2!1sen!2slk!4v1738431996296!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        "review" => [
            [
                "img" => "images/reviewer/1.jpg",
                "name" => "Konstanthinu De Sa",
                "date" => "April 25, 2022 at 10:46 am",
                "subject" => "Heaven travel",
                "messege" => "Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.",
            ],
            [
                "img" => "images/reviewer/2.jpg",
                "name" => "Jeranimo De Asavedu",
                "date" => "April 25, 2022 at 10:46 am",
                "subject" => "Wonderful guiders ever",
                "messege" => "Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.",
            ],
        ]
    ],
);

$footer_insta = array(
    'images/insta/ins-3.jpg',
    'images/insta/ins-4.jpg',
    'images/insta/ins-5.jpg',
    'images/insta/ins-1.jpg',
    'images/insta/ins-7.jpg',
    'images/insta/ins-8.jpg',
    'images/insta/ins-2.jpg',
    'images/insta/ins-6.jpg',
    'images/insta/ins-9.jpg',
    'images/insta/ins-10.jpg'

);

$socialmedia = array(
    "facebook" => "#",
    "whatsapp" => "https://wa.me/+393446857143",
    "instagram" => "https://www.instagram.com/p/CYUI0yWhCFU/?igsh=MWZuZHNlZW04bjVpcQ==",
    "telegram" => "https://t.me/srilankacom_tours",
    "tweeter" => "#",
);

function get_destinations($destinations, ...$ids)
{
    // Filter destinations based on provided des_id values
    return array_filter($destinations, function ($destination) use ($ids) {
        return in_array($destination['des_id'], $ids);
    });
}

$selected_destinations = get_destinations($destinations, '1111', '1112', '1115', '1116');
?>