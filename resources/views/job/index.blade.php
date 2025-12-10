@section('title', $pagetitle )
<x-layout.app :title="$pagetitle"> {{-- طريقة لاستخدم المتغيرات داخل الملف الرئيسي ---}}
    <div>
        <h1 style="text-align: center; margin-top: 5% ;" >Welcome toooooooooooooooooooooo the Nothing</h1>
        <p>
            Osama`s job {{ $jobs[0]['title'] }} <!-- ob-->
            <br>
            @foreach ( $jobs as $job )
                and his salary is  {{ $job['salary'] }}
            @endforeach
        </p>
    </div>
</x-layout.app>
