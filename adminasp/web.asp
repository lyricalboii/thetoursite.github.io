
<%
    Dim dbm1
    set dbm1 = createobject("ADODB.connection")
    dbm1.open "DSN=itt"

    ' set rs = server.createobject("ADODB.recordset")
    ' sql = "select * from tour"
    ' rs.open sql,dbm1 


    '   dbm1.execute("create table book(fname varchar(10) primary key,lname varchar(10),pnumber int(10), email varchar(10), ddate int(10), adate int(10))")
    '  response.write "table created" 

'       dbm1.execute("create table tour(email varchar(20) primary key, name varchar(20),passs varchar(20))")
'   response.write "tabel created"

    ' dbm1.execute("create table booking(first varchar(30), last varchar(30), phone int(20) primary key,maill varchar(30),dedate varchar(30), aedate varchar(30))")
    ' response.write "created"

    ' dbm1.execute("create table package(destination varchar(100), duration varchar(100),price int(100),description varchar(500))")
    ' response.write "cretead"

    ' dbm1.execute("create table review(usrname varchar(30),work varchar(30),mesg varchar(400))")
    ' response.write "created"

    ' dbm1.execute("create table booking(first varchar(50) primary key,last varchar(50),maill varchar(50),dedate int(50),aedate int(50))")
    ' response.write "created"

    ' dbm1.execute("truncate table review")
    ' response.write "dfadf"


%>


' <%
'     Dim dbm1
'     set dbm1 = createobject("ADODB.connection")
'     dbm1.open "DSN=itt"

'     set rs = server.createobject("ADODB.recordset")
'     sql = "select * from review"
'     rs.open sql,dbm1 

    
' %>
