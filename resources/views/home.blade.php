@inject('skills', 'App\Services\SkillsService')

<x-layout>
  <main class="pt-2">
    <div class="container">

      <div>
        <h1 class="display-6">Hello Laravel + Bootstrap!</h1>
        <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
        <hr>
      </div>

      <div class="row">
        <div class="col-md-9">

          <x-bs::tabs.nav>
            <x-bs::tabs.nav.item
              tab-id="home"
              active
            >
              Home
            </x-bs::tabs.nav.item>
            <x-bs::tabs.nav.item tab-id="profile">
              Profile
            </x-bs::tabs.nav.item>
            <x-bs::tabs.nav.item tab-id="contact">
              Contact
            </x-bs::tabs.nav.item>
          </x-bs::tabs.nav>

          <hr>

          <x-bs::tabs.content>
            <x-bs::tabs.content.pane
              tab-id="home"
              active
            >
              <x-bs::card></x-bs::card>
            </x-bs::tabs.content.pane>
            <x-bs::tabs.content.pane tab-id="profile">
              <p>Profile</p>
            </x-bs::tabs.content.pane>
            <x-bs::tabs.content.pane tab-id="contact">
              <p>Contact</p>
            </x-bs::tabs.content.pane>
          </x-bs::tabs.content>


        </div>
        <div class="col-md-3">
          <h2 class="display-6">My Skills</h2>

          <x-bs::accordion
            id="demo-accordion"
            class="accordion-flush"
          >
            @php $color = 'secondary'; @endphp

            @foreach ($skills->skillSets() as $skillSetLabel => $skillSet)
              <x-bs::accordion.item
                item-id="{{ Str::slug($skillSetLabel) }}"
                open="{{ $loop->first ? true : null }}"
              >
                <x-slot:header>{{ $skillSetLabel }}</x-slot>
                @foreach ($skillSet as $skill)
                  <x-bs::badge
                    :label="$skill"
                    :$color
                  />
                @endforeach
              </x-bs::accordion.item>
            @endforeach
          </x-bs::accordion>

        </div>
      </div>

    </div>
  </main>
</x-layout>
