<!--modal start -->
<div id="dialog" class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen z-40 justify-center items-center
    opacity-0 hidden transition-opacity duration-500">
    <div class="bg-white rounded shadow-md p-8 w-[60%] overflow-hidden">
        <div class="flex-grow">
            <h1 class="font-bold text-lg md:text-2xl">Hapus Data</h1>
            <hr class="border-t-1 border-black mt-1">
            <p class="mt-4 text-gray-800 text-xs md:text-lg">Apakah Anda yakin ingin menghapus data ini?</p>
        </div>
        <div class="flex mt-6 gap-4">
            <button onclick="ShowContent()" class="mt-4 text-xs md:text-lg bg-grad py-2 px-4 text-gray-200 rounded-lg hover:bg-gradb">
                Iya
            </button>
            <button onclick="hideDialog()" class="mt-4 text-xs md:text-lg border-1 border-gray-800 py-2 px-3 rounded-lg hover:border-none hover:bg-gray-500 hover:text-white
            focus:bg-gray-500">
                Tidak
            </button>
        </div>
    </div>
</div>
<!-- modal end -->

<!-- javascript -->
<script>
    function showDialog(){
        let dialog = document.getElementById('dialog');
        dialog.classList.remove('hidden');
        dialog.classList.add('flex');
        dialog.classList.add('opacity-100');
        setTimeout(() => {
            dialog.classList.add('opacity-100');
        }, 20);
    }
    function hideDialog() {
        let dialog = document.getElementById('dialog');
        dialog.classList.add('opacity-0');
        setTimeout(() => {
            dialog.classList.add('hidden');
            dialog.classList.remove('flex');
        }, 500);
    }
    function ShowContent() {   
        window.location.href = "/admin/konsultasi";
    }
</script>
