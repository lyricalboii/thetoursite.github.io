<%
    Dim dbm1
    set dbm1 = createobject("ADODB.connection")
    dbm1.open "DSN=itt"

    set rs = server.createobject("ADODB.recordset")


    sql = "select passs from tour where passs LIKE 'd%'"
    
    

    rs.open sql,dbm1


    ' dbm1.execute("create table hello(fnam varchar(10), lnam varchar(10))")
    response.write "column add"
%>