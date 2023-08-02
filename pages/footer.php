<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    $(document).ready(()=>{
        $("#modal").click(function(e){
            e.preventDefault()
            $(".modal").toggle("1")
                $(".fecharModal").click(function(){
                    $(".modal").hide("1")
                })
            
        })


        $("#importarModal").click(function(e){
            e.preventDefault();
            $(".produtos-importar-modal").toggle("1")
            $(".fecharModal").click(function(){
                    $(".produtos-importar-modal").hide("1")
                })
        })

    })
</script>
</body>
</html>
