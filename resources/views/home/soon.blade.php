
<x-layouts.soon>
    <div x-data="{
                    ijjcVideo_Portrait : 'https://res.cloudinary.com/dfw7q7qe2/video/upload/v1665157850/ijjc/ijjc_video_port_pmc34x.mp4',
                    ijjcVideo_landscape : 'https://res.cloudinary.com/dfw7q7qe2/video/upload/v1665157858/ijjc/ijjc_video_b2fsjx.mp4',
                    isPortrait: true,
                    showText: true,
                    startMoveLogo: false,
                    onPlay(){
                        this.showText = false;
                        this.startMoveLogo = true;
                    },
                    onEnd(){
                        this.showText = true;
                        this.startMoveLogo = false;
                    },
                    onInit(){

                        window.addEventListener('resize',() =>{
                            setTimeout(() => {
                                if(screen.orientation){
                                    if(screen.orientation.angle == 0 || screen.orientation.angle == 180)
                                    { this.isPortrait = true; }
                                    else if(screen.orientation.angle == 90 || screen.orientation.angle == 270)
                                    { this.isPortrait = false; }
    
                                } else {
                                    if(window.orientation == 0 || window.orientation == 180)
                                    { this.isPortrait = true; }
                                    else if(window.orientation == 90 || window.orientation == -90)
                                    { this.isPortrait = false; }
                                }
                            },100);

                            
                        });

                        setTimeout(async () => {
                            if (window.innerHeight > window.innerWidth) {
                                $refs.ijjcSource.src = this.ijjcVideo_Portrait;
                            }
                            else  {
                                $refs.ijjcSource.src = this.ijjcVideo_landscape;
                            }
                            $refs.ijjcVideo.load();
                            await $refs.ijjcVideo.play();
                            setInterval(async () => {
                                await $refs.ijjcVideo.play();
                            }, 20000);
                        }, 5000);


                        $watch('isPortrait', async (value) => {
                            if(value){
                                $refs.ijjcSource.src = this.ijjcVideo_Portrait;
                            } else {
                                $refs.ijjcSource.src = this.ijjcVideo_landscape;  
                            }
                            $refs.ijjcVideo.load();
                            await $refs.ijjcVideo.play();
                        });
                    },
                }"  
            x-init="onInit()"  class="relative w-full min-h-screen bg-gray-400 overflow-hidden " >
                <video x-ref="ijjcVideo" x-on:play="onPlay()" x-on:ended="onEnd" class="absolute top-0 left-0 w-full h-full max-w-none object-fill  " 
                    preload="true" muted playsInline>
                    <source x-ref="ijjcSource" x-bind:src="ijjcVideo_Portrait" type="video/mp4"> 
                </video>

                <img x-bind:class="{'move-up': startMoveLogo}" 
                    class="opacity-80 absolute landscape:top-[10%] portrait:top-[30%] left-1/2 -ml-32  w-[250px] h-[250px] " 
                    src="{{asset('/assets/images/ijjc.png')}}" 
                    alt="ijjc"/>
                
                <h1 x-show="showText" 
                    x-transition 
                    class="absolute uppercase text-white text-3xl font-lexend-mega  w-full text-center landscape:top-[75%] portrait:top-[70%] " >
                    Coming soon
                </h1>
    </div>
</x-layouts.soon>