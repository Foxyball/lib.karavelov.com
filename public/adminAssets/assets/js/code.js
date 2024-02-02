$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

   
                  Swal.fire({
                    title: "Сигурни ли сте?",
                    text: "Потвърждение за изтриване?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Да',
                    cancelButtonText: 'Не'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Изтрито!',
                        'Успешно изтриване.',
                        'success'
                      )
                    }
                  }) 


    });

  });


 /// Confirm Order 
$(function(){
    $(document).on('click','#confirm',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

   
                  Swal.fire({
                    title: "Сигурни ли сте?",
                    text: "Once Confirm, You will not be able to pending again?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Да',
                    cancelButtonText: 'Не'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Confirm!',
                        'Confirm Change',
                        'success'
                      )
                    }
                  }) 


    });

  });
 /// Eend Confirm Order 


 /// Processing Order 
$(function(){
    $(document).on('click','#processing',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

   
                  Swal.fire({
                    title: "Сигурни ли сте?",
                    text: "Once Processing, You will not be able to pending again?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Да',
                    cancelButtonText: 'Не'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Processing!',
                        'Processing Change',
                        'success'
                      )
                    }
                  }) 


    });

  });
 /// Eend Processing Order 


 /// Delivered Order 
$(function(){
    $(document).on('click','#delivered',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

   
                  Swal.fire({
                    title: "Сигурни ли сте?",
                    text: "Once Delivered, You will not be able to pending again?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Да',
                    cancelButtonText: 'Не'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Delivered!',
                        'Delivered Change',
                        'success'
                      )
                    }
                  }) 


    });

  });
 /// End Delivered Order 


  /// Return Approved Order 
$(function(){
    $(document).on('click','#approved',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

   
                  Swal.fire({
                    title: "Сигурни ли сте?",
                    text: "Return Order Approved",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Да',
                    cancelButtonText: 'Не'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Approved!',
                        'Approved Change',
                        'success'
                      )
                    }
                  }) 


    });

  });
 /// End Delivered Order 