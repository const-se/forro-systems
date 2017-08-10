<?php

if (!defined('FORRO_SYSTEMS')) {
    header('HTTP/1.0 404 Not Found');
    exit;
}

$content = array(
    'title' => 'ФОPPО Системс | Конвекторы отопления | Дизайн-радиаторы | Владимир',
    'description' => 'Компания FORRO Systems специализируется на продаже водяных конвекторов и дизайн радиаторов. Мы работаем с ведущими производителями, такими как: Itermic, Minib, JAGA, EVA, Mohlenhoff, Hydria IMP Klima, Guratec, Arbonia',
    'keywords' => 'FORRO Systems, конвектор, Владимир, конвекторы отопления, форро системс, арбони, айтермик, яга',
    'og_title' => 'Европейские системы отопления FORRO Systems',
    'og_image' => '/images/logo.png',
    'header' => array(
        'caption' => 'Продажа и монтаж водяных конвекторов и элитных радиаторов отопления',
        'phone_numbers' => array(
            '8 (4922) 60-08-54',
            '8 (930) 830-08-54',
        ),
    ),
    'main_slider' => array(
        array(
            'image' => 'slide1.jpg',
            'caption' => 'Внутрипольные конвекторы',
            'description' => 'Эстетичность, идеальный внешний вид<br/>и безупречная функциональность.<br/>Подходят для помещений с панорамными окнами',
            'price' => 'от 15 000 рублей',
        ),
        array(
            'image' => 'slide2.jpg',
            'caption' => 'Системы отопления нового поколения',
            'description' => 'Настенные конвекторы &mdash; современная<br/>высокотехнологичная альтернатива<br/>всем видам радиаторов',
            'price' => 'от 11 650 рублей',
        ),
        array(
            'image' => 'slide3.jpg',
            'caption' => 'Напольные конвекторы',
            'description' => 'Идеально подойдут для мест<br/>общего пользования, бассейнов и ТЦ.<br/>Простота в монтаже и высокая эффективность',
            'price' => 'от 6 320 рублей',
        ),
        array(
            'image' => 'slide4.jpg',
            'caption' => 'Стальные трубчатые радиаторы',
            'description' => 'Элегантный прибор отопления<br/>с гарантированной высокой теплоотдачей &mdash;<br/>заслуга лазерной сварки и трубчатой структуры',
            'price' => 'от 429 рублей за секцию',
        ),
        array(
            'image' => 'slide5.jpg',
            'caption' => 'Алюминиевые и биметаллические радиаторы',
            'description' => 'Популярный выбор для современного дома',
            'price' => 'от 350 рублей за секцию',
        ),
        array(
            'image' => 'slide6.jpg',
            'caption' => 'Чугунные радиаторы',
            'description' => 'Неприхотливые и надежные приборы отопления,<br/>способные выдерживать высокое давление<br/>и работать даже с теплоносителем низкого качества',
            'price' => 'от 985 рублей за секцию',
        ),
    ),
    'catalog' => array(
        'convectors' => array(
            array(
                'caption' => 'Конвекторы',
                'text' => 'Традиционные формы отопления уступают место новым, более эффективным. Конвекторы отопления являются
                 следующим шагом в эволюции систем отопления. Водяные конвекторы отопления применяются для отопления помещений,
                 имеющих большую площадь остекления, или для помещений с несколькими наружными стенами. Это могут быть такие помещения,
                 как оранжереи, бассейны, зимние сады, магазины, автосалоны, квартиры, офисы. Также их используют в помещениях с повышенной
                 влажностью. Водяные конвекторы отопления надёжны и экономичны. В помещениях с большой степенью остекления и повышенной
                 влажностью трудно поддерживать комфортную температуру без конвектора отопления. Тёплый воздух, создаваемый конвектором,
                 направляется на наружные стены или на остеклённую поверхность, что препятствует образованию конденсата
                 на поверхности и приводит к повышению температуры помещения.',
            ),
        ),
        'radiators' => array(
            array(
                'caption' => 'Стальные трубчатые радиаторы',
                'text' => 'Стальные трубчатые радиаторы – элегантный и функциональный прибор отопления, используемый в жилых
                 помещениях. Применение лазерной сварки позволяет забыть об отложениях и осадках внутри конструкции. Благодаря
                 трубчатой стальной структуре оптимизируется выработка тепла, гарантируется высокая теплоотдача. Важная особенность
                 системы заключается в широком выборе вариантов, разнообразии модельного ряда.',
            ),
            array(
                'caption' => 'Биметаллические радиаторы',
                'text' => 'Основная особенность данных изделий заключается в том, что они производятся по уникальной технологии.
                 При изготовлении таких радиаторов используется комбинация двух металлов (приставка «би» означает два).
                 К этим металлам относятся алюминий и сталь. За счет такого сочетания в отопительном приборе проявляются
                 одновременно свойства радиаторов алюминиевых (секционных) и стальных (трубчатых). Данный вид изделий считается
                 наиболее оптимальным выбором для систем отопления в России как с автономным (частное домостроение),
                 так и с централизованным (многоквартирные жилые дома) принципом действия.',
            ),
            array(
                'caption' => 'Алюминиевые радиаторы',
                'text' => 'Радиаторы, выполненные из алюминия, являются оптимальным выбором для обогрева помещений как с центральной
                 отопительной системой, так и с автономной. Одной из особенностей алюминиевых радиаторов является то,
                 что при их работе важно, какая кислотность у циркулируемой в них воды.',
            ),
            array(
                'caption' => 'Чугунные радиаторы',
                'text' => 'Чугунные радиаторы используются для различных систем отопления. Радиаторы неприхотливы и обладают
                 большой надежностью в эксплуатации. Имеют высокую теплоотдачу и выдерживают высокое давление. Чугунные радиаторы
                 могут работать в системах отопления с теплоносителем низкого качества.',
            ),
        ),
        'slider' => array(
            'convectors' => array(
                array(
                    'image' => 'convector-1.jpg',
                    'caption' => 'Напольный конвектор',
                    'description' => 'Описание',
                ),
                array(
                    'image' => 'convector-2.jpg',
                    'caption' => 'Напольный конвектор',
                    'description' => 'Описание',
                ),
                array(
                    'image' => 'convector-3.jpg',
                    'caption' => 'Напольный конвектор',
                    'description' => 'Описание',
                ),
                array(
                    'image' => 'convector-4.jpg',
                    'caption' => 'Настенный конвектор',
                    'description' => 'Нельзя не отметить такие достоинства конвекторов, как наличие терморегуляторов и защита от перегрева',
                ),
                array(
                    'image' => 'convector-5.jpg',
                    'caption' => 'Настенный конвектор',
                    'description' => 'Настенные конвекторы имеют относительно малый вес, поэтому его можно установить на стену, изготовленную из таких легких материалов, как, например, гипсокартон',
                ),
                array(
                    'image' => 'convector-6.jpg',
                    'caption' => 'Настенный конвектор',
                    'description' => 'Используя конвектор, Вы экономите на топливе для нагрева до 40%',
                ),
                array(
                    'image' => 'convector-7.jpg',
                    'caption' => 'Внутрипольный конвектор',
                    'description' => 'Благодаря расположению в полу такие конвекторы не занимают места в комнате и практически не заметны',
                ),
                array(
                    'image' => 'convector-8.jpg',
                    'caption' => 'Внутрипольный конвектор',
                    'description' => 'Внутрипольные конвекторы легко устанавливать и очищать. К тому же такие конвекторы не поддаются коррозии',
                ),
                array(
                    'image' => 'convector-9.jpg',
                    'caption' => 'Внутрипольный конвектор',
                    'description' => 'Внутрипольные конвекторы осуществляют равномерный нагрев помещения и защиту от запотевания стекол',
                ),
            ),
            'radiators' => array(
                array(
                    'image' => 'radiator-1.jpg',
                    'caption' => 'Алюминиевый радиатор',
                    'description' => 'Он очень крут!',
                ),
                array(
                    'image' => 'radiator-2.jpg',
                    'caption' => 'Алюминиевый радиатор',
                    'description' => 'Этот тоже крутой',
                ),
                array(
                    'image' => 'radiator-3.jpg',
                    'caption' => 'Алюминиевый радиатор',
                    'description' => 'И этот!',
                ),
                array(
                    'image' => 'radiator-4.jpg',
                    'caption' => 'Стальной трубчатый радиатор',
                    'description' => 'И этот тоже',
                ),
                array(
                    'image' => 'radiator-5.jpg',
                    'caption' => 'Стальной трубчатый радиатор',
                    'description' => 'Этот не исключение',
                ),
                array(
                    'image' => 'radiator-6.jpg',
                    'caption' => 'Стальной трубчатый радиатор',
                    'description' => 'Как и этот!',
                ),
                array(
                    'image' => 'radiator-7.jpg',
                    'caption' => 'Чугунный радиатор',
                    'description' => 'Чугун химически пассивен, не поддается коррозии и готов прослужитб Вам не меньше 50 лет',
                ),
                array(
                    'image' => 'radiator-8.jpg',
                    'caption' => 'Чугунный радиатор',
                    'description' => 'Декоративный чугунный радиатор может стать не только источником тепла в вашем доме, но и стильным дополнением к интерьеру',
                ),
                array(
                    'image' => 'radiator-9.jpg',
                    'caption' => 'Чугунный радиатор',
                    'description' => 'Лучевое излучение хорошо прогревает помещение с высокими потолками. А при отключении отопления чугунный радиатор долго остается горячим',
                ),
            ),
        ),
    ),
    'work' => array(
        'video' => 'https://www.youtube.com/embed/WSCnibXFHD4',
    ),
    'usage' => array(
        'caption' => 'Где используются конвекторы?',
        'text' => 'Мы рекомендуем использовать встраиваемые конвекторы:',
        'slider' => array(
            array(
                'image' => 'slide1.jpg',
                'caption' => 'В помещениях с панорамным освещением',
                'text' => 'Постоянная циркуляция воздуха в направлении снизу-вверх позволяет полностью исключить запотевание стекол',
            ),
            array(
                'image' => 'slide2.jpg',
                'caption' => 'В помещениях с высокой влажностью',
                'text' => 'Система отвода конденсата позволяет устанавливать конвекторы в бассейнах, зимних садах и других влажных местах',
            ),
            array(
                'image' => 'slide3.jpg',
                'caption' => 'В помещениях с дефицитом места',
                'text' => 'Скрытый монтаж внутрипольных конвекторов, а также небольшая высота напольных моделей делают их незаменимым вариантом в помещениях с изысканным дизайном и окнами "в пол"',
            ),
            array(
                'image' => 'slide4.jpg',
                'caption' => 'В помещениях большого объема',
                'text' => 'Конвекторы успешно применяются для отопления торговых центров, автосалонов, выставочных площадок и других зданий с большой высотой потолков. Быстрый и направленный прогрев позволяет экономить теплоноситель, минимизируя его потребление в нерабочие часы',
            ),
            array(
                'image' => 'slide5.jpg',
                'caption' => 'В многоквартирных домах и загородных коттеджах',
                'text' => 'Конвекторы могут использоваться, как в централизованной системе отопления, так и в индивидуальной (автономной), причем их монтаж может быть осуществлен на любой стадии строительства',
            ),
            array(
                'image' => 'slide6.jpg',
                'caption' => 'В помещениях со современным дизайном',
                'text' => 'Помимо высокой эффективности конвекторы обладают непревзойденным внешним видом, который позволяет использовать их в самых смелых дизайнерских решениях',
            ),
        ),
    ),
    'calc' => array(
        'caption' => 'Расчет мощности отопительного прибора',
        'text' => array(
            'Чтобы отопительный прибор эффективно выполнял свои функции, а в помещении было тепло и комфортно, необходимо
             правильно рассчитать его мощность (если уж быть точными — тепловые потери помещения). Неправильный расчет может
             привести к печальным последствиям вроде промерзания стен и выхода из строя всей системы отопления.',
            'Расчет теплопотерь помещения должен производиться специалистами исходя из характеристик конкретного помещения.
             Свяжитесь с нами прямо сейчас, и мы совершенно бесплатно выполним расчет теплопотерь вашего помещения, а также
             подберем отопительный прибор необходимой мощности!',
        ),
    ),
    'mistakes' => array(
        'caption' => 'Распространенные заблуждения о конвекторах',
        'questions' => array(
            array(
                'question' => 'Конвекторы с принудительной конвекцией очень сильно шумят, устанавливать их в спальне нельзя',
                'answer' => 'Современные тангенциальные вентиляторы действительно имеют определенный уровень шума при работе.
                    При этом максимальный уровень звукового давления не превышает 40 дБ (аналогично работе бытового кондиционера
                    или системного блока), а менее мощные модели вообще работают на пределе слышимости (26-28 дБ)',
            ),
            array(
                'question' => 'Конвекторы не могут использоваться в качестве основного источника отопления',
                'answer' => 'Могут! Мощность современных конвекторов с принудительной вентиляцией доходит до 10 кВт,
                    что является достаточным для отопления помещения площадью около 100 кв.м.
                    И это мощность лишь одного конвектора!',
            ),
            array(
                'question' => 'Сложность монтажа и возможность установки только при первичном строительстве',
                'answer' => 'Монтаж настенных и напольных конвекторов не сложнее монтажа традиционных радиаторов.
                    Что же касается внутрипольных конвекторов, то с его установкой справится любой строитель-отделочник,
                    следуя подробным инструкциям. Устанавливать конвекторы отопления можно на любой стадии строительства,
                    в том числе и в помещениях с готовой отделкой (конвекторы монтируются в ступеньку)',
            ),
        ),
    ),
    'suppliers' => array(
        'caption' => 'Наши поставщики',
        'slider' => array(
            'slide-1.png',
            'slide-2.png',
            'slide-3.png',
            'slide-4.png',
            'slide-5.png',
            'slide-6.png',
            'slide-7.png',
            'slide-8.png',
        ),
    ),
    'stages' => array(
        'caption' => 'Как мы работаем',
        'stages' => array(
            array(
                'image' => 'mail.png',
                'description' => 'Мы свяжемся с Вами по телефону и/или электронной почте',
            ),
            array(
                'image' => 'calc.png',
                'description' => 'Выполним бесплатный расчет и подбор отопительного прибора',
            ),
            array(
                'image' => 'delivery.png',
                'description' => 'При необходимости выезжаем на объект',
            ),
            array(
                'image' => 'agreement.png',
                'description' => 'Заключим договор и оформим заказ',
            ),
            array(
                'image' => 'mounting.png',
                'description' => 'Доставим и осуществим монтаж вашего отопительного прибора',
            ),
        ),
    ),
    'stock' => array(
        'caption' => 'Закажите любой отопительный прибор до {{date}} и получите {{sum}} рублей в подарок!',
        'sum' => '3000',
    ),
    'feedback' => array(
        'caption' => 'Отзывы',
        'slider' => array(
            array(
                'image' => 'review1.jpg',
                'text_short' => 'Мы благодарны ребятам из ФОPPО Системс за профессионализм, отличный сервис и внимательное отношение к клиентам.',
                'text_full' => array(
                    'Мы благодарны ребятам из ФОPPО Системс за профессионализм, отличный сервис и внимательное отношение к клиентам.',
                    'Ремонт в нашей с женой однушке решили делать с участием дизайнера, которые предложил воплотить нашу давнюю мечту - сделать панорамное остекление в комнате.',
                    'В этой связи, места для радиаторов не осталось, в качестве приборов отопления предусматривались внутрипольные конвекторы. Когда дело дошло до покупки
                    конвекторов, мы неожиданно для себя столкнулись с полным вакуумом в этой области.',
                    'Во всех крупных строительных магазинах Владимира нас отговаривали, предлагали отказаться от конвекторов, не заморачиваться и поставить обычные радиаторы.',
                    'ФОPPО Системс оказалась единственной организацией, специалисты которой смогли нас грамотно проконсультировать и подобрать конвектор необходимой мощности.',
                    'Через неделю со дня первого обращения конвекторы нам доставили прямо в квартиру, помогли с монтажом и наладкой.',
                    'Мы смогли осуществить свою мечту и сегодня живем в теплой уютной и светлой квартире с окнами "в пол". Спасибо вам!',
                ),
                'name' => 'Михаил, г. Владимир',
            ),
            array(
                'image' => 'review3.jpg',
                'text_short' => 'Очень порадовал большой выбор конвекторов в ассортименте и возможность подобрать нужный цвет декоративной решетки.',
                'text_full' => array(
                    'Очень порадовал большой выбор конвекторов в ассортименте и возможность подобрать нужный цвет декоративной решетки.',
                    'Также в шоу-руме ФОPPО Системс  можно "вживую" потрогать, осмотреть конвекторы, послушать громкость работы вентиляторов.',
                    'Ну и главное - получить квалифицированную консультацию. И все это в одном месте. Очень удобно! Желаю вам удачи, ребята!',
                ),
                'name' => 'Анна, дизайнер',
            ),
            array(
                'image' => 'review2.jpg',
                'text_short' => 'Хотел выразить благодарность специалистам из Форро Системс за квалифицированную помощь в непростой ситуации.',
                'text_full' => array(
                    'Хотел выразить благодарность специалистам из ФОPPО Системс за квалифицированную помощь в непростой ситуации.',
                    'Выбор одного из заказчиков пал на водяные конвекторы отопления. Эти отопительные приборы не так часто встречаются в наших домах,
                     в отличие от столичного региона, но заказчик был, как раз из числа взыскательных и требовательных людей с московской пропиской,
                     любящих все новое и современное.',
                    'В ходе монтажа системы отопления выяснилось, что в наличии водяных конвекторов во Владимире нет вообще,
                     а средний срок поставки конвекторов "под заказ" даже в самых крупных строительных магазинах - от 30 до 75 дней.',
                    'Сроки сдачи работ безнадежно "горели", заказчик нервничал и грозил санкциями.',
                    'В отчаянии я полез в интернет и в числе первых увидел сайт тогда еще неизвестной мне
                     компании ФОPPО Системс, которая специализируется именно на водяных конвекторах.',
                    'Не особо надеясь на результат я позвонил и мы договорились с менеджером о встрече.',
                    'В тот же день я имел на руках точный расчет теплопотерь помещения и расчет мощности конвектора.',
                    'Чуда конечно не произошло - необходимой модели не было на складе, однако ребята привезли наши конвекторы уже через 3 дня после заказа.',
                    'Как я понял у них большая дилерская сеть и налаженные связи с производителями. Хотя по большому счету это неважно,
                     главное заказчик доволен, а объект сдан в срок.',
                ),
                'name' => 'Антон, прораб',
            ),
//            array(
//                'image' => 'review3.jpg',
//                'text_short' => 'Очень порадовал большой выбор конвекторов в ассортименте и возможность подобрать нужный цвет декоративной решетки.',
//                'text_full' => array(
//                    'Очень порадовал большой выбор конвекторов в ассортименте и возможность подобрать нужный цвет декоративной решетки.',
//                    'Также в шоу-руме ФОPPО Системс  можно "вживую" потрогать, осмотреть конвекторы, послушать громкость работы вентиляторов.',
//                    'Ну и главное - получить квалифицированную консультацию. И все это в одном месте. Очень удобно! Желаю вам удачи, ребята!',
//                ),
//                'name' => 'Анна, дизайнер',
//            ),
        ),
    ),
    'about' => array(
        'caption' => 'Немного о нас',
        'text' => array(
            'Forro Systems — молодая, динамично развивающаяся компания, которая является единственным во Владимирской области
             официальным дистрибьютором ведущих российских и зарубежных производителей водяных конвекторов. Мы не только 
             предлагаем широкий ассортимент водяных конвекторов отопления, но и осуществляем их монтаж, гарантийное и послегарантийное обслуживание.',
            'Вместе с тем, хотя основной специализацией компании являются именно конвекторы отопления, наиболее взыскательным 
            клиентам мы готовы предложить элитные трубчатые, дизайн- и ретро-радиаторы таких ведущих мировых производителей, как Arbonia и Guratec.',
            'Ждем Вас по адресу: г. Владимир, ул. Чайковского д. 21А, офис 22. Рекомендуем предварительно звонить для заказа пропуска на территорию.',
        ),
    ),
    'map' => array(
        'icon_text' => 'Ждем Вас!',
        'text' => '<strong>г. Владимир, ул. Чайковского д. 21А, офис 22</strong><br/>Рекомендуем предварительно звонить для заказа пропуска на территорию',
        'coords' => array(56.1271, 40.3604),
    ),
    'footer' => array(
        'address' => 'г. Владимир, ул. Чайковского д. 21А, офис 22',
        'phones' => array(
            '+7 (4922) 60-08-54',
            '+7 (930) 830-08-54',
        ),
        'networks' => array(
            array('class' => 'fb', 'link' => '//www.facebook.com/groups/1608074249473606/'),
            array('class' => 'vk', 'link' => '//vk.com/forroconvectors'),
            array('class' => 'inst', 'link' => '//instagram.com/forroconvectors/'),
        ),
    ),
);
