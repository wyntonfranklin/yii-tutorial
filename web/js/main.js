(function($){

    $(document).ready(function(){
        $('.delete-button').on("click",function(){
            var gid = $(this).data("id");
            var verify = confirm("Are you sure?");
            if(verify){
                $.post("/gallery/delete",{id:gid},function(results){
                    if(results === "good"){
                        window.location = '/gallery/';
                    }
                });
            }
        });
    });
})(jQuery)