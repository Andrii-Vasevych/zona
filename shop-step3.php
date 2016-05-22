<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$outp = '[ {"name":"ASUS nVidia GT210", "icon":"lenovoIdeaPad10014.jpg", "desc":"ASUS nVidia GT210 ― доступна відеокарта для робочого, або мультимедійного ПК. Виготовлена із добірних компонентів та матеріалів на основі відеоядра GT210, що забезпечує чудову швидкодію у щоденній роботі та під час декодування відео. А низькопрофільне виготовлення карти та пасивна система охолодження роблять ASUS nVidia GT210 ідеальним вибором для комплектації продуктивної мультимедійної системи HTPC.", "price":985},'.
			'{"name":"ASUS HD5450", "icon":"HP255G4.jpg", "desc":"Відеокарта ASUS HD5450 забеспечує якісну передачу зображення, та підійде як для ігор, так і для роботи. ASUS використовує ексклюзивні системи охолодження, так що може здійснювати охолодження працюючої системи безшумно та якісно. Завдяки її розмірам, чудово підійде до будь-якого системного блоку.", "price":1057},'.
			'{"name":"Gigabyte GT 610", "icon":"HP255G4.jpg", "desc":"Відеокарта бюджетного класу Gigabyte GT 610 задовольнить своєю продуктивністю під час щоденних задач. Доступний HDMI-розєм завдяки позолоченим контактам забезпечить якісну передачу сигналу. Підтримка Nvidia PhysX дозволить насолодитись фізичними ефектами в іграх, що зробить їх більш реалістичними та динамічними. В пристрої активна система охолодження, яка складається з швидкого та водночас тихого вентилятора в компанії з надійним радіатором. Шанс перегрівання зменшується, тому робота буде стабільною.", "price":1250},'.
			'{"name":"Sapphire R5 230 Silent", "icon":"HP255G4.jpg", "desc":"Sapphire R5 230 Silent - бюджетна відеокарта, основою якої став чіп R5 230, виготовлений компанією AMD. Чудово підійде для зборки недорого домашнього чи офісного компютера, що призначений для роботи, перегляду відео чи гри в нескладні ігри. Наділена 1ГБ відеопамяті, що забезпечує продуктивність якої більше ніж достатньо для щоденної роботи. Карта апаратно підтримує Microsoft DirectX 11, Shader Model 5.0, OpenGL 4.1, щоб забезпечити максимальну сумісність із всіма сучасними додатками.", "price":2348},'.
			'{"name":"Gigabyte HD5450", "icon":"HP255G4.jpg", "desc":"Gigabyte HD5450 - бюджетна низькопрофільна відеокарта. Її основою став чіп HD 5450, що виготовлений компанією AMD. Карта чудово підійде для зборки недорого домашнього чи офісного компютера, що призначений для роботи, перегляду відео чи гри в не складні ігри. Наявність порту HDMI надасть можливість підєднати ПК з цією відеокартою до телевізора, а її компактні розміри забезпечать універсальність встановлення у будь-який компютерний корпус.", "price":897},'.
			'{"name":"EVGA GT210", "icon":"DellInspiron3542.jpg", "desc":"EVGA GT210 - дискретна відеокарта початкового типу, призначена для персональних ПК. Компактна конструкція і висока енергоефективність роблять цю відеокарту прекрасним вибором для стаціонарних мультимедійних систем. Пасивна система охолодження забезпечує абсолютно безшумну роботу відеокарти. Підтримка HDMI дозволяє переглядати відео з роздільною здатністю Full HD 1080p.", "price":985} ]';

echo($outp);
?>

