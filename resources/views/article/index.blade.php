<x-layout.main>
    <div class="container">
        @if (count($articles) == 0)

            <p>NON CI SONO ARTICOLI</p>
      @endif ($category!=0)
      <div class="mb-3">
        <p>Tutti gli articoli</p>
      </div>

    </div>
</x-layout.main>
