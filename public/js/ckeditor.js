ClassicEditor
            .create( document.querySelector( '.feature-editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );