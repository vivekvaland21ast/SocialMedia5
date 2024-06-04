<div class="w-1/4">
    <div class="max-w-sm mx-auto bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg shadow-gray-800">
        <div class="text-gray-800 dark:text-white py-2 bg-white border-b dark:bg-gray-900 px-4">
            <h2 class="font-bold text-xl">Top Users</h2>
        </div>
        <div class="scrollbar-y-auto scrollbar-hide overflow-auto" style="height: 450px;">
            @if (isset($friends) && $friends->isNotEmpty())
                @foreach ($friends as $friend)
                    <div id="list-{{ $friend->id }}"
                        class="p-2 flex items-center bg-white dark:bg-gray-900 justify-between border-gray-700 border-t cursor-pointer hover:bg-gray-700">
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
                                src="{{ asset('profile_images/' . $friend->profile) }}" alt="Profile Image" />
                            <div class="ml-2 flex flex-col">
                                <div class="leading-snug text-xs text-gray-200 font-bold">
                                    {{ $friend->full_name }}
                                </div>
                                <div class="leading-snug text-sm text-gray-600  dark:text-gray-400">
                                    {{ '@' . $friend->username }}
                                </div>
                            </div>
                        </div>
                        <div class="friend">
                            @if (auth()->user()->hasFriend($friend->id))
                                <button
                                    class="friend-btn h-8 px-4 mr-4 text-xs font-bold text-red-400 border border-red-400 rounded-full hover:bg-red-100 hover:text-black"
                                    data-friend-id="{{ $friend->id }}" data-action="remove">
                                    Remove Friend
                                </button>
                            @else
                                <button
                                    class="friend-btn h-8 px-4 mr-4 text-xs font-bold text-blue-400 border border-blue-400 rounded-full hover:bg-blue-100 hover:text-black"
                                    data-friend-id="{{ $friend->id }}" data-action="add">
                                    Add Friend
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center text-gray-600 dark:text-gray-400">No friends found.</p>
            @endif
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).on('click', '.friend-btn', function() {
            var button = $(this);
            var friendId = button.data('friend-id');
            var action = button.data('action');
            var url = "{{ route('toggle-friend') }}";

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    friend_id: friendId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    if (action === 'add') {
                        // Update button appearance and behavior
                        button.text('Remove Friend')
                            .data('action', 'remove')
                            .removeClass('text-blue-400 border-blue-400 hover:bg-blue-100')
                            .addClass('text-red-400 border-red-400 hover:bg-red-100');
                        alert(data.message);
                    } else {
                        // Update button appearance and behavior
                        button.text('Add Friend')
                            .data('action', 'add')
                            .removeClass('text-red-400 border-red-400 hover:bg-red-100')
                            .addClass('text-blue-400 border-blue-400 hover:bg-blue-100');
                        alert(data.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
