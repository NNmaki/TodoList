
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite ('resources/css/app.css')
         @vite ('resources/js/app.js')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>


<body>
    


    <div class="main-section">
        <div class="title-section">
            <i class="fa-regular fa-pen-to-square"></i>
            <h1>SIMPLE TODO LIST -APPLICATION</h1>
        </div>
            <div class="output-container">
                
                @foreach ($listItems as $listItem)
                    <div class="output-container-wrapper">
                        <div class="output-container-inner-l">
                            <p id="task-title">TASK:</p>
                        </div>

                        <div class="output-container-inner-c">
                            <p class="{{ $listItem->is_completed == 1 ? 'completed' : '' }}">
                            {{ $listItem->name }}
                            </p>
                        </div>
                    
                @if ($listItem->is_completed == 0)
                    <form method="post" action="{{ route('markComplete', $listItem->id) }}">
                        {{ csrf_field() }}
                        <div class="output-container-inner-r">
                            <button id="button-complete" type="submit" title="Mark Task Completed">MARK COMPLETED</button>
                        </div>     
                    </form>

                @elseif ($listItem->is_completed == 1)
                    <div class="output-container-inner-r">
                        <div>
                            <p title="Task Completed"><i class="fa-regular fa-circle-check" id="completed-icon"></i></p>
                        </div>
                        <div>
                            <form method="post" action="{{ route('hideTask', $listItem->id) }}">
                                {{ csrf_field() }}
                                <button id="button-hide" type="submit" title="Hide Task">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>  
                            </form> 
                        </div>
                    </div>
                @endif
                    </div>
                    <div class="divider"></div>
                @endforeach
            
            </div>

            <div class="form-container">
                <form method="post" action="{{ route('saveItem') }}">
                    {{ csrf_field() }}
                    <label for="listItem">ADD NEW TASK:</label>
                        <div>            
                            <input type="text" name="listItem">
                            @error('listItem')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <button id="button-save" type="submit" title="Save New Task">SAVE TASK</button>
                        </div>
                </form>
            </div>

        </div>

    @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
</body>
</html>