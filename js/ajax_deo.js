        $('document').ready(function(){
            $('#ispisi').on('click', function(){
                var koji_je_nadimak = $('#nadimak').val();
                
                $.ajax({
                    url: 'obrada.php',
                    method: 'GET',
                    data: {nadimak: koji_je_nadimak},
                    dataType: 'text',
                    success: function(odgovor){
                        $('#odg').html(odgovor);
                        alert('Uspesno :D.');
                    },
                    error: function(){
                        alert('Neuspesno! :(');
                    }
                });
            });
        })