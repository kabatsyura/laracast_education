<h2>
    {{ $job->title }}
</h2>
<p>
    Вам пришло тестовое письмо, попробуйте перейти на него!
</p>
<a href="{{ url('/jobs/' . $job->id)  }}">Перейти на страницу компании</a>
<div>
    Let all your things have their places; 
    let each part of your business have its time. 
        - Benjamin Franklin
</div>
