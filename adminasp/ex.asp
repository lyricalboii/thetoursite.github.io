<%

    
    Dim dbm1
    set dbm1 = createobject("ADODB.connection")
    dbm1.open "DSN=itt"

    ' dbm1.execute("truncate table review")
    ' response.write "123"
%>