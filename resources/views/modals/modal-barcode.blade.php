<!--modal start -->
<div id="dialog" class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen z-40 justify-center items-center
   opacity-0 hidden transition-opacity duration-500" onclick="hideDialog(event)">
    <div class="bg-white rounded shadow-md p-8 w-1/2 h-[60%] overflow-hidden " >
        <div class="flex-grow">
            <h1 class="font-bold text-lg md:text-2xl">
                Scan The Barcode
            </h1>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('storage/properti/barcode.jpg') }}" alt="">
        </div>
    </div>
</div>
<!-- modal end -->

<!-- javascript -->
<script>
    function showDialog() {
        let dialog = document.getElementById('dialog');
        dialog.classList.remove('hidden');
        dialog.classList.add('flex');
        dialog.classList.add('opacity-100');
        setTimeout(() => {
            dialog.classList.add('opacity-100');
        }, 20);
    }

    function hideDialog(event) {
        // Periksa apakah target klik adalah modal itu sendiri
        if (event.target.id === 'dialog') {
            let dialog = document.getElementById('dialog');
            dialog.classList.add('opacity-0');
            setTimeout(() => {
                dialog.classList.add('hidden');
                dialog.classList.remove('flex');
            }, 20);
        }
    }
</script>
