@extends('layouts.app')

@section('content')
<div class="site-shell overflow-hidden">
    <header class="site-header" id="inicio">
        <div class="page-width flex h-20 items-center justify-between">
            <a href="#inicio" aria-label="Zenvor - início"><x-logo /></a>
            <nav class="hidden items-center gap-8 lg:flex" aria-label="Navegação principal">
                <a href="#funcionalidades" class="nav-link">Funcionalidades</a>
                <a href="#como-funciona" class="nav-link">Como funciona</a>
                <a href="#planos" class="nav-link">Planos</a>
                <a href="#faq" class="nav-link">FAQ</a>
            </nav>
            <div class="flex items-center gap-3">
                <button class="theme-toggle" type="button" aria-label="Alternar tema" data-theme-toggle>
                    <x-icon name="sun" class="h-4 w-4 dark:hidden" />
                    <x-icon name="moon" class="hidden h-4 w-4 dark:block" />
                </button>
                <a href="#planos" class="button button-primary hidden sm:inline-flex">Começar agora <x-icon name="arrow-up-right" class="h-4 w-4" /></a>
                <button class="theme-toggle lg:hidden" type="button" aria-label="Abrir menu" aria-expanded="false" data-menu-toggle>
                    <x-icon name="menu" class="h-5 w-5" data-menu-open />
                    <x-icon name="x" class="hidden h-5 w-5" data-menu-close />
                </button>
            </div>
        </div>
        <div class="mobile-menu hidden lg:hidden" data-mobile-menu>
            <nav class="page-width flex flex-col gap-1 py-5" aria-label="Navegação mobile">
                <a href="#funcionalidades" class="mobile-nav-link">Funcionalidades</a>
                <a href="#como-funciona" class="mobile-nav-link">Como funciona</a>
                <a href="#planos" class="mobile-nav-link">Planos</a>
                <a href="#faq" class="mobile-nav-link">Perguntas frequentes</a>
                <a href="#planos" class="button button-primary mt-4 justify-center sm:hidden">Começar agora <x-icon name="arrow-up-right" class="h-4 w-4" /></a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero-section section-padding">
            <div class="page-width grid items-center gap-16 lg:grid-cols-[0.9fr_1.1fr] lg:gap-12">
                <div class="max-w-2xl">
                    <div class="eyebrow mb-7"><span class="eyebrow-dot"></span> Gestão que acompanha seu ritmo</div>
                    <h1 class="display-title">Seu negócio merece <span>uma gestão melhor.</span></h1>
                    <p class="hero-copy">Organize agendamentos, gerencie profissionais e tenha mais controle da sua operação em uma única plataforma.</p>
                    <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                        <a href="#funcionalidades" class="button button-primary button-large">Conhecer a plataforma <x-icon name="arrow-up-right" class="h-4 w-4" /></a>
                        <a href="#planos" class="button button-secondary button-large">Ver planos</a>
                    </div>
                    <div class="mt-10 flex items-center gap-3 text-sm text-muted">
                        <div class="avatar-stack"><span>R</span><span>M</span><span>A</span></div>
                        <span>Feito para operações que querem evoluir.</span>
                    </div>
                </div>
                <div class="dashboard-wrap" aria-label="Prévia da plataforma Zenvor">
                    <div class="dashboard-glow"></div>
                    <div class="dashboard-card">
                        <div class="dashboard-topbar"><div class="flex items-center gap-2"><x-logo compact /><span class="text-xs font-semibold text-soft">Visão geral</span></div><span class="status-pill"><span></span> Operação saudável</span></div>
                        <div class="dashboard-body">
                            <div class="flex items-end justify-between"><div><p class="dashboard-kicker">Visão geral</p><h2 class="dashboard-heading">Bom dia, Marina <span>✦</span></h2></div><div class="dashboard-date">Hoje, 24 jun. <x-icon name="chevron-down" class="h-3.5 w-3.5" /></div></div>
                            <div class="metric-grid mt-7"><div class="metric-card"><div class="metric-icon blue"><x-icon name="calendar" class="h-4 w-4" /></div><span>Agendamentos</span><strong>28</strong><small class="positive">+12,5%</small></div><div class="metric-card"><div class="metric-icon violet"><x-icon name="users" class="h-4 w-4" /></div><span>Clientes ativos</span><strong>184</strong><small class="positive">+8,2%</small></div><div class="metric-card"><div class="metric-icon green"><x-icon name="wallet" class="h-4 w-4" /></div><span>Faturamento</span><strong>R$ 4.860</strong><small class="positive">+16,8%</small></div></div>
                            <div class="mt-6 grid gap-5 xl:grid-cols-[1fr_0.8fr]"><div class="panel-card"><div class="flex items-center justify-between"><div><p class="panel-label">Agendamentos da semana</p><strong class="panel-value">126 <small>atendimentos</small></strong></div><span class="panel-select">Esta semana <x-icon name="chevron-down" class="h-3 w-3" /></span></div><div class="chart mt-5"><div class="chart-grid"><i></i><i></i><i></i><i></i></div><div class="chart-bars"><span style="height: 38%"></span><span style="height: 54%"></span><span style="height: 46%"></span><span style="height: 72%"></span><span class="active" style="height: 88%"></span><span style="height: 63%"></span><span style="height: 78%"></span></div></div><div class="chart-days"><span>Seg</span><span>Ter</span><span>Qua</span><span>Qui</span><span>Sex</span><span>Sáb</span><span>Dom</span></div></div><div class="panel-card"><div class="flex items-center justify-between"><p class="panel-label">Próximos horários</p><x-icon name="arrow-up-right" class="h-4 w-4 text-blue" /></div><div class="appointment-list"><div><span class="time">09:30</span><span class="appointment-avatar">JS</span><span><b>João Silva</b><small>Corte + barba</small></span></div><div><span class="time">10:15</span><span class="appointment-avatar pink">MC</span><span><b>Maria Costa</b><small>Coloração</small></span></div><div><span class="time">11:00</span><span class="appointment-avatar gold">RP</span><span><b>Rafael Paiva</b><small>Corte clássico</small></span></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="trust-strip"><div class="page-width flex flex-col items-center justify-between gap-5 py-7 sm:flex-row"><p>Uma operação mais clara começa por aqui.</p><div class="trust-items"><span>agenda organizada</span><i></i><span>equipe alinhada</span><i></i><span>decisões melhores</span></div></div></section>

        <section class="section-padding" id="beneficios"><div class="page-width"><div class="section-intro"><div class="eyebrow">Por que Zenvor</div><h2 class="section-title">Menos tarefas manuais.<br><span>Mais tempo para crescer.</span></h2><p class="section-copy">A tecnologia certa tira o peso da operação e devolve o foco para o que realmente importa: fazer o seu negócio avançar.</p></div><div class="benefits-grid">@foreach($benefits as $benefit)<article class="benefit-card"><div class="feature-icon"><x-icon :name="$benefit['icon']" class="h-5 w-5" /></div><h3>{{ $benefit['title'] }}</h3><p>{{ $benefit['text'] }}</p><a href="#funcionalidades" aria-label="Conheça {{ $benefit['title'] }}"><x-icon name="arrow-up-right" class="h-4 w-4" /></a></article>@endforeach</div></div></section>

        <section class="section-padding section-tint" id="funcionalidades"><div class="page-width"><div class="section-heading-row"><div><div class="eyebrow">A plataforma</div><h2 class="section-title">Tudo o que você precisa,<br><span>em um só lugar.</span></h2></div><p class="section-copy">Uma base inteligente para organizar sua operação hoje e acompanhar o crescimento de amanhã.</p></div><div class="features-grid">@foreach($features as $feature)<article class="feature-card"><div class="feature-icon"><x-icon :name="$feature['icon']" class="h-5 w-5" /></div><h3>{{ $feature['title'] }}</h3><p>{{ $feature['text'] }}</p><span class="feature-arrow"><x-icon name="arrow-up-right" class="h-4 w-4" /></span></article>@endforeach</div></div></section>

        <section class="section-padding" id="como-funciona"><div class="page-width"><div class="section-intro centered"><div class="eyebrow">Simples por natureza</div><h2 class="section-title">Comece pequeno.<br><span>Organize grande.</span></h2><p class="section-copy">Da primeira configuração à rotina diária, a Zenvor foi pensada para tornar cada passo mais simples.</p></div><div class="steps-grid">@foreach($steps as $step)<article class="step-card"><span class="step-number">{{ $step['number'] }}</span><div class="step-line"></div><h3>{{ $step['title'] }}</h3><p>{{ $step['text'] }}</p></article>@endforeach</div></div></section>

        <section class="section-padding section-tint" id="planos"><div class="page-width"><div class="section-intro centered"><div class="eyebrow">Planos que acompanham</div><h2 class="section-title">Escolha o próximo passo<br><span>da sua operação.</span></h2><p class="section-copy">Comece com o essencial e evolua quando o seu negócio pedir. Os detalhes comerciais serão anunciados em breve.</p></div><div class="plans-grid">@foreach($plans as $plan)<article class="plan-card {{ $plan['highlight'] ? 'featured' : '' }}">@if($plan['highlight'])<div class="plan-badge">Recomendado</div>@endif<div class="plan-top"><span class="plan-eyebrow">{{ $plan['eyebrow'] }}</span><h3>{{ $plan['name'] }}</h3><p>{{ $plan['description'] }}</p></div><div class="plan-price"><span>Em breve</span><small>fale com a gente para saber mais</small></div><div class="plan-divider"></div><ul>@foreach($plan['features'] as $feature)<li><span><x-icon name="check" class="h-3.5 w-3.5" /></span>{{ $feature }}</li>@endforeach</ul><a href="#contato" class="button {{ $plan['highlight'] ? 'button-primary' : 'button-secondary' }} w-full">Tenho interesse <x-icon name="arrow-up-right" class="h-4 w-4" /></a></article>@endforeach</div></div></section>

        <section class="section-padding testimonial-section"><div class="page-width"><div class="testimonial-card"><div class="quote-mark">“</div><div><p class="testimonial-text">Este espaço está reservado para histórias reais de negócios que estão simplificando sua operação com a Zenvor.</p><div class="testimonial-author"><span class="author-avatar">+</span><span><b>Seu negócio pode estar aqui</b><small>Depoimentos em breve</small></span></div></div><span class="example-label">Seção demonstrativa</span></div></div></section>

        <section class="section-padding faq-section" id="faq"><div class="page-width grid gap-12 lg:grid-cols-[0.7fr_1.3fr] lg:gap-24"><div><div class="eyebrow">Perguntas frequentes</div><h2 class="section-title">Tudo mais claro<br><span>desde o início.</span></h2><p class="section-copy">Ainda ficou com alguma dúvida? Estamos construindo uma plataforma transparente, feita para facilitar sua rotina.</p><a href="#contato" class="text-link mt-7">Fale com a gente <x-icon name="arrow-up-right" class="h-4 w-4" /></a></div><div class="faq-list">@foreach($faqs as $index => $faq)<details class="faq-item" {{ $index === 0 ? 'open' : '' }}><summary>{{ $faq['question'] }}<span class="faq-plus"><x-icon name="plus" class="h-4 w-4" /></span></summary><p>{{ $faq['answer'] }}</p></details>@endforeach</div></div></section>

        <section class="section-padding"><div class="page-width"><div class="final-cta" id="contato"><div class="cta-decoration"></div><div class="relative z-10"><div class="eyebrow light">O próximo capítulo começa agora</div><h2>Está na hora de<br><span>simplificar sua gestão.</span></h2><p>Conheça uma maneira mais organizada de administrar seu negócio.</p><a href="#planos" class="button button-white button-large">Começar agora <x-icon name="arrow-up-right" class="h-4 w-4" /></a></div><x-logo compact class="cta-logo" /></div></div></section>
    </main>

    <footer class="footer"><div class="page-width"><div class="footer-grid"><div><a href="#inicio"><x-logo /></a><p class="footer-about">Tecnologia para uma gestão mais clara, eficiente e preparada para crescer.</p></div><div><h3>Explore</h3><a href="#funcionalidades">Funcionalidades</a><a href="#como-funciona">Como funciona</a><a href="#planos">Planos</a><a href="#faq">Perguntas frequentes</a></div><div><h3>Empresa</h3><a href="#inicio">Sobre a Zenvor</a><a href="#contato">Contato</a><a href="#contato">Seja parceiro</a></div><div><h3>Legal</h3><a href="#contato">Política de privacidade</a><a href="#contato">Termos de uso</a></div></div><div class="footer-bottom"><span>© {{ date('Y') }} Zenvor. Todos os direitos reservados.</span><span>Feito para negócios em movimento<span class="blue-dot">.</span></span></div></div></footer>
</div>
@endsection
