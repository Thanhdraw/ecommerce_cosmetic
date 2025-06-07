<dialog id="search_modal" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg mb-4">Tìm kiếm khóa học</h3>
        <div class="form-control">
            <div class="input-group">
                <input type="text" placeholder="Nhập từ khóa..." class="input input-bordered flex-1" />
                <button class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="mt-4">
            <h4 class="font-semibold mb-2">Gợi ý tìm kiếm:</h4>
            <div class="flex flex-wrap gap-2">
                <div class="badge badge-outline cursor-pointer">Laravel Basic</div>
                <div class="badge badge-outline cursor-pointer">PHP Advanced</div>
                <div class="badge badge-outline cursor-pointer">Vue.js</div>
                <div class="badge badge-outline cursor-pointer">Database</div>
            </div>
        </div>
    </div>
</dialog>
