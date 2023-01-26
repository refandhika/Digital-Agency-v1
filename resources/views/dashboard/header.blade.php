        <nav class="fixed w-full z-50 top-0">
            <div class="relative bg-gray-100">
              <div class="mx-auto max-w-7xl px-6">
                <div class="flex items-center justify-end py-6 md:justify-between md:space-x-10">
                  <div class="items-center justify-start md:flex md:flex-1 lg:w-0">
                    <a href="{{ route('dashboard.index') }}" class="inline-flex items-center justify-center whitespace-nowrap text-base font-medium shadow-sm">Dashboard</a>
                  </div>
                  <div class="items-center justify-end md:flex md:flex-1 lg:w-0">
                    <form action="{{ route('logout.store') }}" method="POST">
                      @csrf
                      <button class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-3xl border border-transparent bg-orange-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-orange-700" type="submit">Log Out</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </nav>