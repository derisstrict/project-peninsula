@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<a href="/events" class="btn-primary p-3 w-fit">
    <x-icon icon="arrow" width="16px" height="16px" class="rotate-225" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
    <p class="text-sm">Back</p>
</a>
<div class="flex flex-col gap-2 mt-5">
    <img class="rounded-xl self-center w-500 h-150 object-cover" src="/img/placeholder.jpg" alt="event-image">
    <p class="text-4xl font-semibold mt-5">The Big Bounce <span class="text-sm font-normal">by idkthename</span></p>
    <div class="flex gap-5 mt-5">
        <div class="infobox-accent">
            <div class="flex gap-3">
                <x-icon icon="time" class="text-lime-600" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor"
                    outline="currentColor" xmlns="http://www.w3.org/2000/svg">
                </x-icon>
                <div class="flex flex-col gap">
                    <p class="font-bold">Event Timeline</p>
                    <p>28 August 2025 - 07 October 2025</p>
                </div>
            </div>
        </div>
        <div class="infobox-accent">
            <div class="flex gap-3">
                <x-icon icon="money" class="text-lime-600" width="24px" height="24px" viewBox="-0.5 0 25 25" fill="currentColor"
                stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                </x-icon>
                <div class="flex flex-col gap">
                    <p class="font-bold">Starting Price</p>
                    <p>IDR 75.000</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-xl mt-6">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae voluptates aperiam nisi consequuntur dolore? Facilis iste aliquam nostrum omnis vel quod illo assumenda saepe, ullam doloribus minus eligendi aliquid eius molestias neque, sed magnam iure error excepturi officiis dolore repellendus odit laudantium consequuntur. Blanditiis amet obcaecati similique esse dolor hic in a fugiat reiciendis minima! Unde possimus at ipsam voluptate dolore cumque nam sequi, alias quasi eligendi nemo fuga eveniet quae cupiditate minus tenetur perferendis enim vero culpa sed repellat temporibus asperiores nostrum. Voluptatem veniam nobis illo ea odio, eos cupiditate nihil! Placeat, ratione impedit maxime exercitationem, rerum quia dolores doloribus fugiat, sit hic blanditiis laborum magnam possimus aperiam eum earum. Quas, necessitatibus. Aut atque dicta, iste dolor amet porro libero nisi obcaecati itaque temporibus illum maxime vero odit facilis, earum sint culpa quidem ut, possimus accusantium facere. Reiciendis, repellat. Et exercitationem laborum aspernatur necessitatibus atque qui perferendis, officiis beatae?</p> <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nisi dolorem distinctio saepe pariatur eligendi maxime assumenda esse consequatur repudiandae a fugit minima inventore similique asperiores facere vel aliquam perferendis quis commodi, temporibus dolor illum. Molestiae non deleniti temporibus fuga laboriosam? Similique culpa ipsum dolorum doloribus molestias numquam, voluptas neque alias saepe, voluptate perferendis! Maxime ea veniam molestias quidem nemo commodi nisi atque perspiciatis consequuntur ipsa! Facilis aliquam, blanditiis laboriosam pariatur quibusdam tempore esse cum fugit asperiores itaque animi recusandae.</p> <br>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis impedit dolorum cum accusantium! Nobis adipisci ipsam rerum laborum assumenda velit similique ad iusto asperiores ducimus odit, reprehenderit aliquid a perspiciatis quas expedita dolor, tenetur quasi! Accusantium est ut eligendi labore harum praesentium voluptas soluta vero dicta sit ducimus saepe iure dolor pariatur nesciunt, laborum voluptate repellendus quod commodi consequatur illum quisquam. Illum blanditiis mollitia cum reprehenderit odit amet quibusdam sint vel pariatur assumenda? Enim, molestias. Quo quisquam corrupti quidem beatae magni nisi similique ipsum, quam nemo, doloribus inventore consectetur? Error quo quisquam, repellendus debitis neque recusandae repudiandae labore suscipit odit qui quibusdam, alias cum illum exercitationem dignissimos quis, ut perferendis quos perspiciatis rem! Earum eveniet minima magni ipsa animi in unde est deserunt nisi nemo itaque tenetur, fuga atque qui alias suscipit eaque repellat, obcaecati temporibus velit voluptates cumque laborum! Error tempore explicabo et quos, corporis nam quidem maxime eos non ex vero recusandae beatae totam sunt eveniet neque iure maiores ipsam esse, ratione deleniti a? Animi, aspernatur laudantium. Laborum nulla quos fugiat aspernatur suscipit cumque ratione neque dolorem voluptatibus.</p>
    </div>
</div>
@endsection
