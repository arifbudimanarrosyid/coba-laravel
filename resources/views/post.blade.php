@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <article class="mb-5">
            <h4>{{ $post->title }}</h4>
            {{-- <h5>by {{ $post['author'] }}</h5> --}}
            {!! $post->body !!}
        </article>
    </article>
    <a href="/blog">Back</a>
    {{-- <a href="/blog">
        <img src="https://img.icons8.com/fluency/50/000000/back.png"/>
    </a> --}}
@endsection

{{-- Post::create(
[
'title' => 'judul ke satu',
'slug' => 'judul-ke-satu',
'excerpt' => 'excerpt ke lima',
'body' => '<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa neque, enim a esse nesciunt sit asperiores non quasi
    minus dolor sint consequuntur qui et amet, sed, fugit corrupti maxime officiis! Laboriosam, odit, dolore suscipit
    similique officiis nobis itaque maiores doloremque quas magnam, consectetur tempora assumenda. Tempora esse, commodi
    quam error illum fuga, eius ratione suscipit consectetur in pariatur atque tempore nisi ea corporis provident
    consequatur delectus aut est? Dolor temporibus architecto iusto nobis sint similique, suscipit optio sit ipsum
    ducimus
    aspernatur voluptate deleniti tempora nostrum quaerat commodi accusantium placeat, corrupti cupiditate earum?
    Perspiciatis error alias quidem expedita. Quis illum magni,
</p>
<p>

    sed modi aliquid at fuga! Officiis commodi natus placeat
    reprehenderit sequi impedit molestias minima ipsum ipsam perspiciatis voluptate dolorem inventore, magnam aspernatur
    ut
    enim, ab eaque? Aperiam illo libero ipsam explicabo, officiis laborum sint. Quibusdam, enim voluptatibus dicta
    itaque
    velit vero error, aspernatur ex atque, neque eum. Molestias tempore cupiditate, voluptatibus ea ratione quasi sint
    ullam
    tenetur, iure vel nobis hic ducimus laborum sed maiores doloremque quis soluta atque cum perferendis reiciendis
    corrupti
    harum eos? Harum voluptates sequi numquam laborum temporibus sed sunt nemo unde tempore libero ex dicta similique,
    quia
    ratione voluptas porro ipsam assumenda hic eligendi animi labore vel obcaecati quasi voluptatibus. Officiis labore
    necessitatibus vitae, quis ratione placeat soluta nam.
</p>
<p>

    Voluptates ipsam, neque assumenda iure placeat quis eligendi aut
    unde voluptatem aliquam officiis molestias, velit autem perspiciatis sint beatae doloremque. Molestiae placeat
    accusamus
    alias distinctio dolore atque, quaerat quisquam iusto est culpa labore saepe, similique quas commodi eveniet. Optio
    porro similique et voluptatum nemo soluta placeat amet totam dolorum nulla dignissimos est praesentium doloribus
    exercitationem, illo voluptate eius quos quas omnis aliquam ullam in. Doloremque consequuntur assumenda eligendi
    temporibus suscipit quas? Ex, autem. Modi ratione soluta esse ea molestias, quas suscipit eveniet culpa dolorum
    pariatur
    sapiente fugit, omnis cumque. Doloribus quibusdam eum delectus iure corporis, praesentium aspernatur, perferendis
    eius
    tempora cum repudiandae? Aut pariatur aspernatur ipsum facilis modi qui dolore rerum corrupti temporibus ea illum in
    voluptas voluptatibus iste placeat exercitationem maiores ipsa est dolor ullam autem labore, accusamus assumenda!
    Quasi
    nostrum aperiam dignissimos deleniti cupiditate facilis sed, assumenda error facere ea vero excepturi quis sapiente
    architecto eos labore! Earum hic provident necessitatibus a exercitationem velit vero similique veniam voluptates
    assumenda impedit dolores ducimus quae sapiente dicta esse, cum facilis suscipit. Odio tempore iure non est mollitia
    necessitatibus maxime ab ducimus facere iste reiciendis, provident quia ipsa.

</p>'
]
); --}}
