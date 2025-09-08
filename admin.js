function search()
    {
        var input,filter,table,tr,td,i,textvalue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("table");
        tr = table.getElementsByTagName("tr");
        for(i=0;i<tr.length;i++)
        {
            td = tr[i].getElementsByTagName("td")[1];
            if(td)
            {
                textvalue = td.textContent;
                if(textvalue.toUpperCase().indexOf(filter) > -1)
                {
                    tr[i].style.display="";
                }
                else
                {
                    tr[i].style.display="none";
                }
            }
        }
    }