<div>
    @props(['type' => 'success'])

    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    @if(session($type))
    <div class="mb-4 p-4 rounded text-white
        @if($type == 'success') bg-green-500 
        @elseif($type == 'error') bg-red-500 
        @elseif($type == 'warning') bg-yellow-500 text-black 
        @endif
    ">
        {{ session($type) }}
    </div>
    @endif

</div>