<script>
    function confirmation(id, type) {
        var userResponse = confirm("Are you sure?\nOnce deleted, you will not be able to recover this record!");
        if (userResponse) {
            $.ajax({
                url: '/api/delete',
                type: 'POST',
                data: {
                    push_id: id,
                    push_type: type
                },
                success: function(data) {
                    window.location.href = data;
                },
                error: function(err) {
                   alert(err);
                }
            });
        } else {
          
        }
    }
</script>
<div class="nk-footer">
    <div class="container-fluid">
        <div class="nk-footer-wrap">
            -
            <div class="nk-footer-copyright">College of Information Technology  &copy; 2024 <a href="https://tcc.edu.ph/" target="_blank" style="color: #b4543d">Tagoloan Community College</a> ❤️ All Rights Reserved.</div>
            
        </div>
    </div>
</div>
