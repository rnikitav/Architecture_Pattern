## Architecture_Pattern
<br>

### 4 Lesson

1) Как при помощи трейта улучшить Singltone? Приведите пример


2) Разработать и реализовать на PHP собственную ORM (Object-Relational Mapping —прослойку между базой данных и кодом) посредством абстрактной фабрики. Фабрики будут реализовывать интерфейсы СУБД MySQLFactory, PostgreSQLFactory, OracleFactory. Каждая фабрика возвращает объекты, характерные для конкретной СУБД. Пример компонентов: 
* DBConnection — соединение с базой,
* DBRecrord — запись таблицы базы данных,
* DBQueryBuiler — конструктор запросов к базе. 
* Должна получиться гибкая система, позволяющая динамически менять базу данных и инкапсулирующая взаимодействие с ней внутри продуктов конкретных фабрик. Углубляться в детали компонента не обязательно — достаточно их наличия.


### 5 Lesson

1)  Реализовать на PHP пример Декоратора, позволяющий отправлять уведомления несколькими различными способами
2) Реализовать паттерн Адаптер для связи внешней библиотеки (классы SquareAreaLib и CircleAreaLib) вычисления площади квадрата (getSquareArea) и площади круга (getCircleArea) с интерфейсами ISquare и ICircle имеющегося кода. Примеры классов даны ниже. Причём во внешней библиотеке используются для расчётов формулы нахождения через диагонали фигур, а в интерфейсах квадрата и круга — формулы, принимающие значения одной стороны и длины окружности соответственно


###  6 Dir
1) Наблюдатель: есть сайт HandHunter.gb. На нем работники могут подыскать себе вакансию РНР-программиста. Необходимо реализовать классы искателей с их именем, почтой и стажем работы. Также реализовать возможность в любой момент встать на биржу вакансий (подписаться на уведомления), либо же, напротив, выйти из гонки за местом. Таким образом, как только появится новая вакансия программиста, все жаждущие автоматически получат уведомления на почту (можно реализовать условно).
2) Стратегия: есть интернет-магазин по продаже носков. Необходимо реализовать возможность оплаты различными способами (Qiwi, Яндекс, WebMoney). Разница лишь в обработке запроса на оплату и получение ответа от платёжной системы. В интерфейсе функции оплаты достаточно общей суммы товара и номера телефона.


### 6 Dir +
3) Команда: вы — разработчик продукта Macrosoft World. Это текстовый редактор с возможностями копирования, вырезания и вставки текста (пока только это). Необходимо реализовать механизм по логированию этих операций и возможностью отмены и возврата действий. Т. е., в ходе работы программы вы открываете текстовый файл .txt, выделяете участок кода (два значения: начало и конец) и выбираете, что с этим кодом делать.
