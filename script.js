db = '';
tb = '';
//раскрывает  бд и показывает в ней все таблицы
function f(dn, obj) {
    db = dn;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            obj.outerHTML = xhttp.responseText;
            strSost1();
        }
    }
    xhttp.open('GET', 'server1.php?dn=' + dn, true);
    xhttp.send();
}
//раскрытие выбранной таблицы
function e(dn, tn, obj) {
    db = dn;
    tb = tn;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            obj.innerHTML = xhttp.responseText;
            obe();
            strSost2();
        }
    }
    xhttp.open('GET', 'server2.php?dn=' + dn + '&tn=' + tn, true);
    xhttp.send();
}
//вывод вверху путь к базе по выбронным таблицам и базе
function strSost1() {
    document.getElementsByClassName('t')[0].innerHTML = 'Сервер: localhost >> База данных: ' + db;
}
//вывод вверху путь к базе по выбронным таблицам и базе
function strSost2() {
    document.getElementsByClassName('t')[0].innerHTML = 'Сервер: localhost >> База данных: ' + db + ' >> Таблица: ' + tb;
}
//вывод формы для обзора
function obe() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'server3.php?dn=' + db + '&tn=' + tb, true);
    xhttp.send();
}
//вывод формы для структуры
function str() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'server4.php?dn=' + db + '&tn=' + tb, true);
    xhttp.send();
}

//связи
function svas()
{
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'server13.php?dn=' + db + '&tn=' + tb, true);
    xhttp.send();
}


//вывод формы для sql
function sql() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'server5.php?dn=' + db, true);
    xhttp.send();
}
//вывод формы для дизайнер
function diz() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'server7.php?dn=' + db, true);
    xhttp.send();
}

   //вывод формы для привелегий
function priv() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'server12.php?dn=' + db, true);
    xhttp.send();
}
//удаление
function del(dn, tb, m1, row1) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            obe();
        }
    }
    xhttp.open('GET', 'server_del.php?dn=' + dn + '&tb=' + tb + '&m1=' + m1 + '&row1=' + row1, true);
    xhttp.send();
}
//вывод формы для экспорта
function exp() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = 'Экспорт выполнен.';
        }
    }
    xhttp.open('GET', 'server8.php?dn=' + db + '&tn=' + tb, true);
    xhttp.send();
}
//вывод формы для импорта
function imp() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'server9.php?dn=' + db, true);
    xhttp.send();
}
//удаление структуры
function delStr(dn, tn, tb) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            str();
        }
    }
    xhttp.open('GET', 'server_delStr.php?dn=' + dn + '&tn=' + tn + '&tb=' + tb, true);
    xhttp.send();
}
//ну тоже изменения
function upd(obj, x, y, z, b, u) {
    s = ''
    for (i = 0; i < obj.parentNode.childNodes.length - 4; i++)
        s += '<td><input type=text value=' + obj.parentNode.childNodes[i].innerHTML + '></td>';
    s += '<td> Удалить </td><td onClick=f2(this,&quot;' + x + '&quot;,&quot;' + y + '&quot;,&quot;' + z + '&quot;,&quot;' + b + '&quot;,&quot;' + u + '&quot;)>Save</td>'
    obj.parentNode.innerHTML = s
}
//редоктирование
function f2(obj, x, y, z, b, u) {
    s = ''
    for (i = 0; i < obj.parentNode.childNodes.length - 2; i++)
        s += obj.parentNode.childNodes[i].childNodes[0].value + ';';
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
            obe();
        }
    }
    xhttp.open('GET', 'server_upd.php?dn=' + u + '&tn=' + x + '&fn=' + y + '&va=' + z + '&mf=' + b + '&mv=' + s, true);
    xhttp.send();
}
//для sql  запросов
function sel() {
    s = '';
    s += document.getElementsByClassName('sel')[0].value;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('sel')[0].value = 'Запрос выполнен';
        }
    }
    xhttp.open('GET', 'server6.php?sel=' + s + '&dn=' + db, true);
    xhttp.send();
}
// ниже функции для перетаскивания таблиц в дизайнере и их анимация
function dragNdrop(obj) {
    var ball = obj;

    ball.onmousedown = function (e) {

        var coords = getCoords(ball);
        var shiftX = e.pageX - coords.left;
        var shiftY = e.pageY - coords.top;

        ball.style.position = 'absolute';
        //document.body.appendChild(ball);
        moveAt(e);

        ball.style.zIndex = 1000; // над другими элементами

        function moveAt(e) {
            ball.style.left =    e.pageX -coords.left + 'px';
            ball.style.top =    e.pageY - coords.top + 'px';
        }

        document.onmousemove = function (e) {
            moveAt(e);
        };

        ball.onmouseup = function () {
            document.onmousemove = null;
            ball.onmouseup = null;
        };

    }

    ball.ondragstart = function () {
        return false;
    };

    function getCoords(elem) {   // кроме IE8-
        var box = elem.getBoundingClientRect();
        return {
            top: box.top + pageYOffset,
            left: box.left + pageXOffset
        };
    }
}
//добавление
function ad(obj) {
    s = '';
    for (i = 0; i < obj.parentNode.childNodes.length - 1; i++) {
        s += obj.parentNode.childNodes[i].childNodes[0].value + ';';
    }

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            for (i = 0; i < obj.parentNode.childNodes.length - 1; i++) {
                obj.parentNode.childNodes[i].childNodes[0].value = '';
                obe();
            }
        }
    }
    xhttp.open('GET', 'server_add.php?tn=' + tb + '&mv=' + s + '&dn=' + db, true);
    xhttp.send();
}
//вывод формы для добавления процедуры
function proс() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'server10.php?dn=' + db + '&tn=' + tb, true);
    xhttp.send();
}
//добавление
function add() {
    s = '<span><input type=text><input type=text><input type=text><input type=text><input type=button onClick=dell(this) value=Удалить></span>';
    document.getElementsByClassName('output').innerHTML += s;
}
//удаление
function dell(obj) {
    a = obj.parentNode
    a.outerHTML = '';
}
//добавление процедуры
function f4() {
    a = document.getElementById('w8').childNodes
    l = '('
    for (i = 0; i < a.length; i++) {
        m = a[i].getElementsByTagName('input')
        l += m[0].value + ' ' + m[1].value + ' ' + m[2].value + '(' + m[3].value + ')' + ', '
    }
    l = l.substr(0, l.length - 2)
    l += ')'
    b = document.getElementById('q1').value
    //alert (b)
    //alert (l)
    c = document.getElementById('e1').value
    //alert (c)
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById('w9').innerHTML = xhttp.responseText;
            proc()
        }
    }
    xhttp.open('GET', 'server_addProc.php?dn=' + db + '&tn=' + tb + '&b=' + b + '&l=' + l + '&c=' + c, true);
    xhttp.send();
}
//вывод формы для добавления тригера
function trig() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'server11.php?dn=' + db + '&tn=' + tb, true);
    xhttp.send();
}
//добавление тригера
function f5() {
    v1 = document.getElementById('v1').value;
    v2 = document.getElementById('v2').value;
    v3 = document.getElementById('v3').value;
    v4 = document.getElementById('v4').value;
    v5 = document.getElementById('v5').value;
    alert(v5);
    l = v1 + ' ' + v3 + ' ' + v4 + ' ON ' + v2 + ' FOR EACH ROW '
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = 'Триггер создан.';
        }
    }
    xhttp.open('GET', 'server_addTrig.php?dn=' + db + '&tn=' + tb + '&l=' + l + '&v5=' + v5, true);
    xhttp.send();
}
//добавление привилегии
function addUser() {
    log = document.getElementById('l1').value;
    pass = document.getElementById('p1').value;
    check();
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementsByClassName('output')[0].innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'server_addPriv.php?dn=' + db + '&tn=' + tb + '&l1=' + log + '&p1=' + pass + '&l=' + l, true);
    xhttp.send();
}
function check() {
    l = '';
    var check = document.getElementsByTagName('input');
    var checked = [];
    for (var i = 0; i < check.length; i++) {
        if (check[i].checked) {
            checked.push(check[i].value);
            l += check[i].value;
            l += ', ';
        }
    }
    return checked
}



////// 

function option_Col(selectObject)
{
    var value = selectObject.value;  
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            selectObject.parentNode.parentNode.parentNode.querySelectorAll('td')[4].querySelector('select').innerHTML = xhttp.responseText;
           
        }
    }
    xhttp.open('GET', 'option_tabl.php?dn='+value, true);
    xhttp.send();
    

}


function option_colllll(selectObject , )
{
    var value = selectObject.value;  
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            selectObject.parentNode.parentNode.parentNode.querySelectorAll('td')[5].querySelector('select').innerHTML = xhttp.responseText;
           
        }
    }
    xhttp.open('GET', 'primeKey.php?dn='+selectObject.parentNode.parentNode.parentNode.querySelectorAll('td')[3].querySelector('select').value + "&tn="+ value , true);
    xhttp.send();
    

}

function addss()
{
   console.log()

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var v =document.createElement('tr') ;
            v.innerHTML = xhttp.responseText;
            document.querySelector('#sss').append(v)
           
        }
    }
    xhttp.open('GET', 'Td.php?dn='+db + "&tn="+ tb, true);
    xhttp.send();
}

function addSvas(s)
{
   console.log(s.parentNode.querySelectorAll('td'));
    namess = s.parentNode.querySelectorAll('td')[1].childNodes[1].querySelector('input').value;
    cas1 =  s.parentNode.querySelectorAll('td')[1].childNodes[3].querySelectorAll('span')[0].querySelector('select').value;
    cas2 =  s.parentNode.querySelectorAll('td')[1].childNodes[3].querySelectorAll('span')[1].querySelector('select').value;

    c2=  s.parentNode.querySelectorAll('td')[2].childNodes[1].querySelector('select').value;
    c3=  s.parentNode.querySelectorAll('td')[3].childNodes[1].querySelector('select').value;
    c4=  s.parentNode.querySelectorAll('td')[4].childNodes[1].querySelector('select').value;
    c5=  s.parentNode.querySelectorAll('td')[5].childNodes[1].querySelector('select').value;


    
    console.log(namess);
    console.log(cas1);
    console.log(cas2);
    
    console.log(c2);
    console.log(c3);
    console.log(c4);
    console.log(c5);
  

   
  

    sqlss = "ALTER TABLE `"+tb+"` ADD CONSTRAINT `"+namess+"` FOREIGN KEY (`"+c2+"`) REFERENCES `shedule`(`"+c5+"`) ON DELETE "+cas1+" ON UPDATE "+cas2
    console.log (sqlss);

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            selectObject.parentNode.parentNode.parentNode.querySelectorAll('td')[4].querySelector('select').innerHTML = xhttp.responseText;
           
        }
    }
    xhttp.open('GET', 'sql.php?dn='+db+"&sel="+sqlss, true);
    xhttp.send();
    
}


