@props(['project'])
<x-ui.card>
    <div class="flex items-start justify-between pb-4">
        <div class="flex flex-col gap-[16px]">
            <div>
                <x-projects.status :status="$project->status" />
            </div>
            <h1 class="text-[28px] leading-9 text-white">
                {{ $project->title }}
            </h1>
            <div>
                <div class="text-[14px] leading-6 text-[#8C8C9A]">
                    Publicado {{ $project->created_at->diffForHumans() }}
                </div>
                <div class="mt-4 flex items-center justify-between text-[14px]">
                    <div class="leading-6 text-[#8C8C9A]">Encerra em:</div>
                    <div class="flex items-center space-x-1 font-bold">
                        <span class="text-white">01</span><span>:</span>
                        <span class="text-white">12</span><span>:</span>
                        <span class="text-white">26</span><span>:</span>
                        <span class="text-white">64</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-y-4 py-4">
        <div class="text-[12px] font-bold uppercase text-[#8C8C9A]">Tecnologias</div>
        <div class="flex items-center gap-[8px] pb-2">
            @foreach ($project->tech_stack as $tech)
                <x-ui.tech :icon="$tech" :text="$tech" />
            @endforeach
        </div>
    </div>

    <div class="space-y-4 pt-4">
        <div class="text-[12px] font-bold uppercase text-[#8C8C9A]">Publicado Por</div>
        <div class="flex items-center gap-[8px]">
            <div>
                <x-ui.avatar src="{{ $project->author->avatar }}" />
            </div>

            <div>
                <div class="text-[14px] font-bold tracking-wide text-white">
                    {{ $project->author->name }}
                </div>
                <div class="flex items-center space-x-[4px]">
                    @foreach (range(1, $project->author->stars) as $star)
                        <x-ui.icons.star class="h-[14px]" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-ui.card>
