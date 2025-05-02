@extends('frontend.home')
@section('hero')
<div class="bg-[#FAF7F6] dark:bg-gray-900 min-h-screen py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ url()->previous() }}" class="flex items-center text-[#BF8E43] hover:text-amber-700 mb-6 transition-colors duration-300">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back
        </a>

        <div class="mb-8">
            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                <span>Published on May 02, 2025</span>
                <span class="mx-2">•</span>
                <span>5 min read</span>
                @auth
                    @if(Auth::user()->role === 'admin')
                        <span class="mx-2">•</span>
                        <a href="{{ route('edit-blog', $blog->id) }}" class="text-[#BF8E43] hover:underline">Edit</a>
                    @endif
                @endauth
            </div>
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 dark:text-white mb-4">Avoid Scams in Instagram Fashion Shopping - Nepal</h1>
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full overflow-hidden mr-3">
                    <img src="{{asset('images/favicon-logo.png')}}" alt="Author" class="w-full h-full object-cover">
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">By Lugacious</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Fashion Blogger</p>
                </div>
            </div>
        </div>

        <div class="rounded-xl overflow-hidden mb-8 shadow-lg">
            <img src="{{asset('images/blog_instagram shopping in nepal.jpeg')}}" 
                 alt="Nepalese fashion brands" 
                 class="w-full h-auto max-h-96 object-cover">
        </div>

        <article class="prose dark:prose-invert max-w-none prose-lg">
            <p class="lead">Instagram has become the go-to place for Nepali fashion lovers to discover trendy clothes, outfits, and accessories from local and international stores. But with the rise of Instagram shopping in Nepal, there’s also been a worrying increase in <strong>fake accounts</strong> scamming customers by pretending to be real fashion stores. These scammers copy popular Nepali brands’ profiles and content to trick shoppers into paying upfront for clothes they never receive.</p>
            
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mt-10 mb-4">Why Are Instagram Fashion Scams a Growing Problem in Nepal?</h2>
            <p>Online shopping in Nepal has surged, especially after the pandemic, with more people embracing digital payments and Instagram as a shopping platform. Unfortunately, scammers have taken advantage of this trend. Many fake Instagram pages use stolen photos and mimic real Nepali clothing stores to lure customers with unbelievably low prices and flashy posts. After customers pay in advance, these accounts disappear or block buyers, leaving them empty-handed.</p>
            
            <div class="my-6 p-4 border-l-4 border-[#BF8E43] bg-[#BF8E43]/10 dark:bg-gray-800 rounded-r">
                <p class="italic text-gray-700 dark:text-gray-300">"Nepalese fashion isn't just about clothing—it's about telling stories through textiles."</p>
            </div>
            
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mt-10 mb-4">How to Protect Yourself from Instagram Fashion Scams in Nepal</h2>
            <p> Here are three simple but powerful ways to spot suspicious Instagram fashion pages and avoid losing your money:</p>
            <h3 class="text-xl font-bold text-gray-800 dark:text-white mt-10 mb-4">1. Check if Comments Are Disabled</h3>
            <p>Legitimate Nepali fashion stores love engaging with their customers and usually keep comments open for feedback and questions. If you find an Instagram shop with <strong>comments disabled</strong> on all posts, be very cautious. Scammers do this to hide complaints from other buyers and avoid negative reviews.</p>
             
            <h3 class="text-xl font-bold text-gray-800 dark:text-white mt-10 mb-4">2. Beware of Prepayment Only and No Cash on Delivery</h3>
            <p>Many fake stores insist on full prepayment before shipping, refusing safer options like cash on delivery (COD). Real Nepali shops often offer COD or partial payment options to build trust. If a page pressures you to <strong>pay upfront</strong> without alternatives, it’s a red flag.
            </p>
            
            <h3 class="text-xl font-bold text-gray-800 dark:text-white mt-10 mb-4">3. Compare Prices with Other Stores
            </h3>
            <p>If the prices look too good to be true-much cheaper than other Nepali Instagram fashion stores-think twice. Scammers attract buyers by offering <strong>high discounts</strong> that no genuine store can sustain. Always compare prices with well-known Nepali shops before making a purchase.
            </p>
                
            
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mt-10 mb-4">Additional Tips for Safe Instagram Shopping in Nepal</h2>
            
            <ul class="list-disc pl-6 space-y-2 my-6">
                <li><strong>Verify the Store’s Contact Details:</strong> Check if the Instagram page provides a valid Nepali phone number or address. Try calling or messaging to confirm responsiveness.</li>
                <li><strong>Look for Reviews or Scam Reports:</strong> Search online or on Nepali social media groups for any scam alerts related to the store. Accounts like @scamreportnepal on Instagram help report and verify suspicious clothing shops.</li>
                <li><strong>Trust Your Instincts:</strong> If something feels off-like poor-quality images, inconsistent branding, or vague store info-avoid making a purchase.</li>
            </ul>
            
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mt-10 mb-4">What to Do If You’ve Been Scammed</h2>
            <p>If you suspect you’ve been scammed by an Instagram fashion store in Nepal, report the account to Instagram immediately and <strong>share your experience</strong> on local scam-reporting pages. Unfortunately, legal remedies are limited, and many victims hesitate to file police complaints due to complex procedures. Still, raising awareness helps protect others.</h2>
            </p>

        </article>

       
        <div class="flex flex-wrap gap-2 mt-10 mb-12">
            <span class="px-3 py-1 bg-[#BF8E43]/10 text-[#BF8E43] text-sm rounded-full">Fashion</span>
            <span class="px-3 py-1 bg-[#BF8E43]/10 text-[#BF8E43] text-sm rounded-full">Nepal</span>
            <span class="px-3 py-1 bg-[#BF8E43]/10 text-[#BF8E43] text-sm rounded-full">Brands</span>
            <span class="px-3 py-1 bg-[#BF8E43]/10 text-[#BF8E43] text-sm rounded-full">Sustainable</span>
        </div>



    </div>
</div>
@endsection