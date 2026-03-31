<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ReadX — Intelligent Answer Sheet Evaluation Platform</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300;1,9..40,400&family=Instrument+Serif:ital@0;1&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
/* ============================================================
   CSS CUSTOM PROPERTIES
   ============================================================ */
:root {
  --bg-primary: #07070D;
  --bg-secondary: #0E0E18;
  --bg-card: #13131E;
  --bg-card-hover: #1A1A28;
  --bg-glass: rgba(19, 19, 30, 0.7);
  --text-primary: #F2EEE8;
  --text-secondary: #9894A2;
  --text-muted: #5E5A67;
  --accent-blue: #4F7CFF;
  --accent-blue-light: #7FA0FF;
  --accent-blue-glow: rgba(79, 124, 255, 0.18);
  --accent-blue-glow-sm: rgba(79, 124, 255, 0.10);
  --accent-teal: #36D6C3;
  --accent-teal-glow: rgba(54, 214, 195, 0.14);
  --accent-amber: #FFB547;
  --accent-amber-glow: rgba(255, 181, 71, 0.14);
  --accent-rose: #FF6B8A;
  --accent-rose-glow: rgba(255, 107, 138, 0.14);
  --border: rgba(255,255,255,0.055);
  --border-hover: rgba(255,255,255,0.13);
  --border-focus: rgba(79, 124, 255, 0.5);
  --gradient-hero: linear-gradient(135deg, rgba(79,124,255,0.09) 0%, rgba(54,214,195,0.055) 50%, rgba(255,181,71,0.04) 100%);
  --gradient-blue-teal: linear-gradient(135deg, var(--accent-blue), var(--accent-teal));
  --gradient-card-shine: linear-gradient(135deg, rgba(255,255,255,0.03) 0%, transparent 60%);
  --font-display: 'Instrument Serif', Georgia, serif;
  --font-body: 'DM Sans', system-ui, sans-serif;
  --font-mono: 'JetBrains Mono', monospace;
  --shadow-card: 0 4px 24px rgba(0,0,0,0.35), 0 1px 4px rgba(0,0,0,0.2);
  --shadow-card-hover: 0 12px 48px rgba(0,0,0,0.5), 0 4px 16px rgba(0,0,0,0.3);
  --shadow-blue: 0 8px 32px rgba(79,124,255,0.25);
  --shadow-blue-lg: 0 16px 56px rgba(79,124,255,0.35);
  --radius-sm: 8px;
  --radius-md: 12px;
  --radius-lg: 16px;
  --radius-xl: 20px;
  --radius-pill: 100px;
  --transition-fast: 0.2s ease;
  --transition-base: 0.3s ease;
  --transition-slow: 0.5s ease;
}

/* ============================================================
   RESET & BASE
   ============================================================ */
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

html { scroll-behavior: smooth; font-size: 16px; overflow-x: hidden; }

body {
  font-family: var(--font-body);
  background: var(--bg-primary);
  color: var(--text-primary);
  line-height: 1.6;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body::before {
  content: '';
  position: fixed; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E");
  pointer-events: none; z-index: 9999;
}

body::after {
  content: '';
  position: fixed; top: 0; left: 0; width: 100%; height: 100%;
  background:
    radial-gradient(ellipse 80% 50% at 20% -10%, rgba(79,124,255,0.07), transparent),
    radial-gradient(ellipse 60% 40% at 80% 110%, rgba(54,214,195,0.05), transparent);
  pointer-events: none; z-index: 0;
}

.container { max-width: 1200px; margin: 0 auto; padding: 0 2rem; position: relative; z-index: 1; }
a { color: inherit; text-decoration: none; }

/* ============================================================
   LOGO
   ============================================================ */
.logo-mark { display: inline-flex; align-items: center; gap: 0.6rem; transition: opacity var(--transition-base); }
.logo-mark:hover { opacity: 0.85; }
.logo-icon {
  width: 34px; height: 34px; border-radius: var(--radius-sm);
  background: linear-gradient(135deg, rgba(79,124,255,0.18), rgba(54,214,195,0.12));
  border: 1px solid rgba(79,124,255,0.2);
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 2px 12px rgba(79,124,255,0.15);
  transition: box-shadow var(--transition-base);
}
.logo-mark:hover .logo-icon { box-shadow: 0 4px 20px rgba(79,124,255,0.3); }
.logo-icon svg { width: 20px; height: 20px; }
.logo-text { font-family: var(--font-body); font-size: 1.3rem; font-weight: 700; letter-spacing: -0.025em; color: var(--text-primary); }
.logo-text .x { background: var(--gradient-blue-teal); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.logo-sm .logo-icon { width: 28px; height: 28px; border-radius: 6px; }
.logo-sm .logo-icon svg { width: 17px; height: 17px; }
.logo-sm .logo-text { font-size: 1.1rem; }

/* ============================================================
   NAVBAR
   ============================================================ */
nav {
  position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
  padding: 1rem 0;
  backdrop-filter: blur(24px) saturate(180%);
  -webkit-backdrop-filter: blur(24px) saturate(180%);
  background: rgba(7,7,13,0.65);
  border-bottom: 1px solid var(--border);
  transition: background var(--transition-base), border-color var(--transition-base), padding var(--transition-base);
}
nav.scrolled { padding: 0.8rem 0; background: rgba(7,7,13,0.92); border-bottom-color: rgba(255,255,255,0.08); }
nav .container { display: flex; align-items: center; justify-content: space-between; }
.nav-links { display: flex; gap: 0.25rem; align-items: center; }
.nav-links a {
  font-size: 0.875rem; font-weight: 500; color: var(--text-secondary);
  letter-spacing: 0.01em; padding: 0.45rem 0.9rem;
  border-radius: var(--radius-pill);
  transition: color var(--transition-base), background var(--transition-base);
}
.nav-links a:hover { color: var(--text-primary); background: rgba(255,255,255,0.05); }
.nav-links a.active { color: var(--text-primary); background: rgba(79,124,255,0.1); }
.nav-cta {
  padding: 0.55rem 1.4rem; border-radius: var(--radius-pill);
  background: var(--accent-blue); color: #fff;
  font-size: 0.84rem; font-weight: 600; letter-spacing: 0.02em;
  border: none; cursor: pointer; transition: all var(--transition-base);
  font-family: var(--font-body); box-shadow: 0 4px 16px rgba(79,124,255,0.3);
}
.nav-cta:hover { background: var(--accent-blue-light); transform: translateY(-1px); box-shadow: var(--shadow-blue); }
.nav-toggle { display: none; background: none; border: none; cursor: pointer; padding: 0.5rem; border-radius: var(--radius-sm); transition: background var(--transition-base); }
.nav-toggle:hover { background: rgba(255,255,255,0.06); }
.nav-toggle span { display: block; width: 22px; height: 2px; background: var(--text-primary); margin: 5px 0; border-radius: 2px; transition: all var(--transition-base); }

/* Dropdown */
.nav-dropdown { position: relative; }

.nav-dropdown-btn {
  display: inline-flex; align-items: center; gap: 0.35rem;
  font-size: 0.875rem; font-weight: 500; color: var(--text-secondary);
  padding: 0.45rem 0.9rem; border-radius: var(--radius-pill);
  background: none; border: none; cursor: pointer;
  font-family: var(--font-body);
  transition: color var(--transition-base), background var(--transition-base);
}
.nav-dropdown-btn svg { transition: transform var(--transition-base); }
.nav-dropdown-btn:hover { color: var(--text-primary); background: rgba(255,255,255,0.05); }
.nav-dropdown:hover .nav-dropdown-btn { color: var(--text-primary); background: rgba(255,255,255,0.05); }
.nav-dropdown:hover .nav-dropdown-btn svg { transform: rotate(180deg); }

.nav-dropdown-menu {
  position: absolute; top: calc(100% + 0.6rem); left: 50%;
  transform: translateX(-50%);
  min-width: 180px;
  background: var(--bg-card);
  border: 1px solid var(--border-hover);
  border-radius: var(--radius-md);
  padding: 0.5rem;
  box-shadow: 0 16px 48px rgba(0,0,0,0.4), 0 4px 12px rgba(0,0,0,0.2);
  opacity: 0; visibility: hidden;
  transform: translateX(-50%) translateY(-8px);
  transition: opacity var(--transition-base), transform var(--transition-base), visibility var(--transition-base);
  z-index: 100;
}
.nav-dropdown:hover .nav-dropdown-menu {
  opacity: 1; visibility: visible;
  transform: translateX(-50%) translateY(0);
}

.nav-dropdown-item {
  display: flex; align-items: center; gap: 0.75rem;
  padding: 0.6rem 0.9rem; border-radius: var(--radius-sm);
  font-size: 0.875rem; font-weight: 500; color: var(--text-secondary);
  transition: all var(--transition-fast);
}
.nav-dropdown-item:hover { color: var(--text-primary); background: rgba(255,255,255,0.06); }

.dropdown-icon {
  display: flex; align-items: center; justify-content: center;
  width: 26px; height: 26px; border-radius: 6px;
  background: var(--bg-secondary); color: var(--text-muted);
  flex-shrink: 0; transition: all var(--transition-fast);
}
.nav-dropdown-item:hover .dropdown-icon { background: var(--accent-blue-glow); color: var(--accent-blue); }

/* ============================================================
   HERO
   ============================================================ */
.hero { min-height: 100vh; display: flex; align-items: center; position: relative; padding-top: 6rem; overflow: hidden; }
.hero::before {
  content: ''; position: absolute; top: -15%; left: -15%; width: 130%; height: 130%;
  background: var(--gradient-hero); filter: blur(100px); z-index: 0;
}
.hero-orb-1 { position: absolute; top: 8%; right: 3%; width: 560px; height: 560px; border-radius: 50%; background: radial-gradient(circle, rgba(79,124,255,0.13), transparent 70%); animation: float 13s ease-in-out infinite; pointer-events: none; }
.hero-orb-2 { position: absolute; bottom: 10%; left: 0%; width: 440px; height: 440px; border-radius: 50%; background: radial-gradient(circle, rgba(54,214,195,0.09), transparent 70%); animation: float 16s ease-in-out infinite reverse; pointer-events: none; }
@keyframes float { 0%, 100% { transform: translateY(0) scale(1); } 50% { transform: translateY(-32px) scale(1.04); } }
.hero .container { position: relative; z-index: 1; text-align: center; }
.hero-badge {
  display: inline-flex; align-items: center; gap: 0.55rem;
  padding: 0.45rem 1.1rem; border-radius: var(--radius-pill);
  background: var(--bg-card); border: 1px solid rgba(54,214,195,0.2);
  font-size: 0.78rem; font-weight: 600; color: var(--accent-teal);
  margin-bottom: 2.5rem; letter-spacing: 0.07em; text-transform: uppercase;
  animation: fadeUp 0.8s ease both; box-shadow: 0 0 24px rgba(54,214,195,0.08);
}
.hero-badge .dot { width: 6px; height: 6px; border-radius: 50%; background: var(--accent-teal); box-shadow: 0 0 6px var(--accent-teal); animation: pulse-dot 2s ease infinite; }
@keyframes pulse-dot { 0%, 100% { opacity: 1; transform: scale(1); } 50% { opacity: 0.5; transform: scale(0.8); } }
.hero h1 { font-family: var(--font-display); font-weight: 400; font-size: clamp(3rem, 7.5vw, 5.8rem); line-height: 1.07; letter-spacing: -0.025em; margin-bottom: 1.5rem; animation: fadeUp 0.8s 0.12s ease both; }
.hero h1 em { font-style: italic; background: var(--gradient-blue-teal); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.hero p { font-size: 1.15rem; max-width: 600px; margin: 0 auto 2.75rem; color: var(--text-secondary); line-height: 1.75; animation: fadeUp 0.8s 0.24s ease both; font-weight: 400; }
.hero-actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; animation: fadeUp 0.8s 0.36s ease both; }
@keyframes fadeUp { from { opacity: 0; transform: translateY(28px); } to { opacity: 1; transform: translateY(0); } }

/* Buttons */
.btn-primary { padding: 0.9rem 2.2rem; border-radius: var(--radius-pill); background: var(--accent-blue); color: #fff; font-size: 0.95rem; font-weight: 600; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 0.5rem; transition: all var(--transition-base); font-family: var(--font-body); box-shadow: 0 4px 20px rgba(79,124,255,0.3); letter-spacing: 0.01em; }
.btn-primary:hover { background: var(--accent-blue-light); transform: translateY(-2px); box-shadow: var(--shadow-blue-lg); }
.btn-primary:active { transform: translateY(0); }
.btn-primary:disabled { opacity: 0.5; cursor: not-allowed; transform: none; box-shadow: none; }
.btn-outline { padding: 0.9rem 2.2rem; border-radius: var(--radius-pill); background: transparent; color: var(--text-primary); font-size: 0.95rem; font-weight: 500; cursor: pointer; border: 1px solid var(--border-hover); display: inline-flex; align-items: center; gap: 0.5rem; transition: all var(--transition-base); font-family: var(--font-body); letter-spacing: 0.01em; }
.btn-outline:hover { border-color: rgba(255,255,255,0.25); background: rgba(255,255,255,0.04); transform: translateY(-1px); }

/* Hero Stats */
.hero-stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1px; margin-top: 5rem; border-radius: var(--radius-lg); overflow: hidden; background: var(--border); animation: fadeUp 0.8s 0.5s ease both; box-shadow: var(--shadow-card); }
.hero-stat { background: var(--bg-card); padding: 2.2rem 1.5rem; text-align: center; transition: background var(--transition-base); position: relative; overflow: hidden; }
.hero-stat::before { content: ''; position: absolute; inset: 0; background: var(--gradient-card-shine); opacity: 0; transition: opacity var(--transition-base); }
.hero-stat:hover { background: var(--bg-card-hover); }
.hero-stat:hover::before { opacity: 1; }
.hero-stat .number { font-family: var(--font-display); font-size: 2.4rem; font-weight: 400; background: linear-gradient(135deg, var(--text-primary), var(--text-secondary)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; display: block; margin-bottom: 0.3rem; }
.hero-stat .label { font-size: 0.78rem; color: var(--text-muted); letter-spacing: 0.05em; text-transform: uppercase; font-weight: 500; }

/* ============================================================
   SECTIONS
   ============================================================ */
section { padding: 7rem 0; position: relative; }
.section-label { font-size: 0.73rem; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; color: var(--accent-blue); margin-bottom: 1rem; display: inline-block; }
.section-title { font-family: var(--font-display); font-weight: 400; font-size: clamp(2rem, 4vw, 3.1rem); line-height: 1.14; letter-spacing: -0.02em; margin-bottom: 1.1rem; }
.section-desc { font-size: 1.05rem; color: var(--text-secondary); max-width: 600px; line-height: 1.75; margin-bottom: 3.5rem; font-weight: 400; }
.section-header-center { text-align: center; }
.section-header-center .section-desc { margin-left: auto; margin-right: auto; }
.section-divider { height: 1px; background: var(--border); }

/* ============================================================
   FEATURES GRID
   ============================================================ */
.features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; background: var(--border); border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-card); }
.feature-card { background: var(--bg-card); padding: 2.8rem 2.5rem; transition: background var(--transition-slow); position: relative; overflow: hidden; }
.feature-card::before { content: ''; position: absolute; inset: 0; background: var(--gradient-card-shine); opacity: 0; transition: opacity var(--transition-base); }
.feature-card:hover { background: var(--bg-card-hover); }
.feature-card:hover::before { opacity: 1; }
.feature-icon { width: 50px; height: 50px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.6rem; transition: transform var(--transition-base), box-shadow var(--transition-base); }
.feature-card:hover .feature-icon { transform: translateY(-2px); }
.feature-icon.blue { background: var(--accent-blue-glow); color: var(--accent-blue); box-shadow: 0 4px 16px rgba(79,124,255,0.1); }
.feature-icon.teal { background: var(--accent-teal-glow); color: var(--accent-teal); box-shadow: 0 4px 16px rgba(54,214,195,0.08); }
.feature-icon.amber { background: var(--accent-amber-glow); color: var(--accent-amber); box-shadow: 0 4px 16px rgba(255,181,71,0.08); }
.feature-icon.rose { background: var(--accent-rose-glow); color: var(--accent-rose); box-shadow: 0 4px 16px rgba(255,107,138,0.08); }
.feature-card h3 { font-size: 1.08rem; font-weight: 650; margin-bottom: 0.75rem; letter-spacing: -0.015em; }
.feature-card p { font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7; }

/* ============================================================
   PIPELINE
   ============================================================ */
.pipeline { display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; position: relative; }
.pipeline::before { content: ''; position: absolute; top: 27px; left: 12.5%; right: 12.5%; height: 2px; background: linear-gradient(90deg, var(--accent-blue), var(--accent-teal), var(--accent-amber), var(--accent-rose)); opacity: 0.25; }
.pipeline-step { text-align: center; position: relative; }
.step-number { width: 56px; height: 56px; border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-family: var(--font-mono); font-weight: 500; font-size: 0.85rem; border: 1.5px solid var(--border-hover); background: var(--bg-secondary); position: relative; z-index: 1; transition: all var(--transition-base); color: var(--text-muted); }
.pipeline-step:hover .step-number { border-color: var(--accent-blue); background: var(--accent-blue-glow); color: var(--accent-blue); box-shadow: 0 0 20px rgba(79,124,255,0.2); transform: scale(1.08); }
.pipeline-step h4 { font-size: 1rem; font-weight: 600; margin-bottom: 0.5rem; }
.pipeline-step p { font-size: 0.85rem; color: var(--text-muted); line-height: 1.65; }

/* ============================================================
   INNOVATIONS
   ============================================================ */
.innovation-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }
.innovation-card { padding: 2.5rem; border-radius: var(--radius-lg); border: 1px solid var(--border); background: var(--bg-card); transition: all var(--transition-base); position: relative; overflow: hidden; box-shadow: var(--shadow-card); }
.innovation-card::before { content: ''; position: absolute; inset: 0; background: var(--gradient-card-shine); opacity: 0; transition: opacity var(--transition-base); }
.innovation-card::after { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent, var(--accent-blue), transparent); opacity: 0; transition: opacity 0.4s; }
.innovation-card:hover { border-color: var(--border-hover); box-shadow: var(--shadow-card-hover); transform: translateY(-3px); }
.innovation-card:hover::before { opacity: 1; }
.innovation-card:hover::after { opacity: 1; }
.innovation-tag { display: inline-block; padding: 0.3rem 0.85rem; border-radius: var(--radius-pill); font-size: 0.68rem; font-weight: 700; letter-spacing: 0.09em; text-transform: uppercase; margin-bottom: 1.3rem; }
.innovation-tag.patent { background: rgba(79,124,255,0.12); color: var(--accent-blue); border: 1px solid rgba(79,124,255,0.2); }
.innovation-tag.ip { background: rgba(54,214,195,0.1); color: var(--accent-teal); border: 1px solid rgba(54,214,195,0.2); }
.innovation-card h3 { font-size: 1.15rem; font-weight: 650; margin-bottom: 0.8rem; letter-spacing: -0.01em; }
.innovation-card p { font-size: 0.88rem; color: var(--text-secondary); line-height: 1.7; }

/* ============================================================
   ARCHITECTURE
   ============================================================ */
.arch-wrapper { display: grid; grid-template-columns: 1fr 1fr; gap: 3.5rem; align-items: center; }
.arch-visual { background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 2rem; position: relative; overflow: hidden; box-shadow: var(--shadow-card); }
.arch-visual::before { content: ''; position: absolute; top: -50%; right: -50%; width: 100%; height: 100%; background: radial-gradient(circle, rgba(79,124,255,0.07), transparent 60%); }
.arch-block { padding: 0.95rem 1.3rem; border-radius: var(--radius-md); margin-bottom: 0.6rem; border: 1px solid var(--border); background: var(--bg-secondary); display: flex; align-items: center; justify-content: space-between; font-size: 0.88rem; transition: all var(--transition-base); position: relative; z-index: 1; cursor: default; }
.arch-block:last-child { margin-bottom: 0; }
.arch-block:hover { border-color: rgba(79,124,255,0.35); background: var(--accent-blue-glow-sm); transform: translateX(4px); }
.arch-block span:first-child { font-weight: 500; color: var(--text-primary); }
.arch-block .tag { font-family: var(--font-mono); font-size: 0.68rem; color: var(--text-muted); background: rgba(255,255,255,0.05); padding: 0.2rem 0.65rem; border-radius: 4px; border: 1px solid var(--border); white-space: nowrap; }
.arch-detail h3 { font-size: 1.35rem; font-weight: 650; margin-bottom: 1.1rem; letter-spacing: -0.015em; line-height: 1.3; }
.arch-detail p { font-size: 0.92rem; color: var(--text-secondary); line-height: 1.75; margin-bottom: 1.3rem; }
.arch-specs { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 2rem; }
.arch-spec { padding: 1.3rem; border-radius: var(--radius-md); background: var(--bg-card); border: 1px solid var(--border); transition: all var(--transition-base); }
.arch-spec:hover { border-color: var(--border-hover); background: var(--bg-card-hover); }
.arch-spec .val { font-family: var(--font-display); font-size: 1.7rem; margin-bottom: 0.25rem; background: var(--gradient-blue-teal); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.arch-spec .lbl { font-size: 0.73rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.07em; font-weight: 500; }

/* ============================================================
   BENCHMARKS
   ============================================================ */
.benchmarks-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; }
.bench-card { padding: 2.2rem; border-radius: var(--radius-lg); border: 1px solid var(--border); background: var(--bg-card); text-align: center; transition: all var(--transition-base); position: relative; overflow: hidden; box-shadow: var(--shadow-card); }
.bench-card::before { content: ''; position: absolute; inset: 0; background: var(--gradient-card-shine); opacity: 0; transition: opacity var(--transition-base); }
.bench-card:hover { border-color: var(--border-hover); transform: translateY(-5px); box-shadow: var(--shadow-card-hover); }
.bench-card:hover::before { opacity: 1; }
.bench-value { font-family: var(--font-display); font-size: 3.2rem; font-weight: 400; margin-bottom: 0.4rem; display: block; line-height: 1; }
.bench-value.blue { color: var(--accent-blue); }
.bench-value.teal { color: var(--accent-teal); }
.bench-value.amber { color: var(--accent-amber); }
.bench-label { font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 1rem; line-height: 1.4; }
.bench-bar { height: 3px; border-radius: 2px; background: rgba(255,255,255,0.06); overflow: hidden; }
.bench-bar-fill { height: 100%; border-radius: 2px; transition: width 1.8s cubic-bezier(0.25, 1, 0.5, 1); width: 0; }
.bench-bar-fill.blue { background: linear-gradient(90deg, var(--accent-blue), var(--accent-blue-light)); }
.bench-bar-fill.teal { background: linear-gradient(90deg, #2bbfad, var(--accent-teal)); }
.bench-bar-fill.amber { background: linear-gradient(90deg, #f0a030, var(--accent-amber)); }
.bench-compare { font-size: 0.73rem; color: var(--text-muted); margin-top: 0.85rem; font-weight: 500; letter-spacing: 0.02em; }

/* ============================================================
   LANGUAGES
   ============================================================ */
.langs-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; }
.lang-card { padding: 2.8rem 2.5rem; border-radius: var(--radius-lg); border: 1px solid var(--border); background: var(--bg-card); text-align: center; transition: all var(--transition-base); box-shadow: var(--shadow-card); position: relative; overflow: hidden; }
.lang-card::after { content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent, var(--accent-teal), transparent); opacity: 0; transition: opacity var(--transition-base); }
.lang-card:hover { border-color: var(--border-hover); transform: translateY(-4px); box-shadow: var(--shadow-card-hover); }
.lang-card:hover::after { opacity: 1; }
.lang-script { font-size: 3.2rem; margin-bottom: 1rem; line-height: 1; }
.lang-card h4 { font-size: 1.05rem; font-weight: 650; margin-bottom: 0.4rem; }
.lang-card .accuracy { font-family: var(--font-mono); font-size: 0.85rem; color: var(--accent-teal); background: rgba(54,214,195,0.08); padding: 0.25rem 0.75rem; border-radius: var(--radius-pill); display: inline-block; margin-top: 0.4rem; }

/* ============================================================
   CTA
   ============================================================ */
.cta-section { text-align: center; padding: 9rem 0; position: relative; }
.cta-section::before { content: ''; position: absolute; top: 0; left: 15%; right: 15%; bottom: 0; background: radial-gradient(ellipse, rgba(79,124,255,0.12), transparent 70%); }
.cta-section .container { position: relative; z-index: 1; }
.cta-section h2 { font-family: var(--font-display); font-size: clamp(2.2rem, 4.5vw, 3.6rem); font-weight: 400; margin-bottom: 1.3rem; letter-spacing: -0.02em; }
.cta-section p { font-size: 1.05rem; color: var(--text-secondary); margin-bottom: 2.75rem; max-width: 480px; margin-left: auto; margin-right: auto; line-height: 1.75; }

/* ============================================================
   ORB ALIASES (inner pages)
   ============================================================ */
.orb1 {
  position: absolute; top: 5%; right: 5%;
  width: 420px; height: 420px; border-radius: 50%;
  background: radial-gradient(circle, rgba(79,124,255,0.11), transparent 70%);
  animation: float 12s ease-in-out infinite;
  pointer-events: none;
}
.orb2 {
  position: absolute; bottom: 0; left: 4%;
  width: 360px; height: 360px; border-radius: 50%;
  background: radial-gradient(circle, rgba(54,214,195,0.08), transparent 70%);
  animation: float 15s ease-in-out infinite reverse;
  pointer-events: none;
}

/* ============================================================
   INNOVATIONS EXTRA
   ============================================================ */
.inno-detail {
  margin-top: 1.1rem;
  padding: 1rem 1.2rem;
  border-radius: var(--radius-sm);
  background: rgba(255,255,255,0.025);
  border: 1px solid var(--border);
  font-size: 0.83rem;
  color: var(--text-muted);
  line-height: 1.7;
}

.ip-stats {
  display: grid; grid-template-columns: repeat(4, 1fr);
  gap: 1px; margin-top: 3rem;
  background: var(--border);
  border-radius: var(--radius-lg); overflow: hidden;
  box-shadow: var(--shadow-card);
}
.ip-stat {
  background: var(--bg-card);
  padding: 2rem 1.5rem; text-align: center;
  transition: background var(--transition-base);
}
.ip-stat:hover { background: var(--bg-card-hover); }
.ip-stat .val {
  font-family: var(--font-display); font-size: 2.4rem; font-weight: 400;
  background: var(--gradient-blue-teal);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
  background-clip: text; display: block; margin-bottom: 0.3rem;
}
.ip-stat .lbl {
  font-size: 0.78rem; color: var(--text-muted);
  letter-spacing: 0.05em; text-transform: uppercase; font-weight: 500;
}

/* CTA Strip */
.cta-strip {
  padding: 5rem 0; text-align: center;
  background: linear-gradient(135deg, rgba(79,124,255,0.06), rgba(54,214,195,0.04));
  border-top: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
  position: relative;
}
.cta-strip::before {
  content: ''; position: absolute;
  top: 0; left: 20%; right: 20%; bottom: 0;
  background: radial-gradient(ellipse, rgba(79,124,255,0.08), transparent 70%);
  pointer-events: none;
}
.cta-strip .container { position: relative; z-index: 1; }
.cta-strip h2 {
  font-family: var(--font-display); font-weight: 400;
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  letter-spacing: -0.02em; margin-bottom: 0.9rem;
}
.cta-strip p {
  font-size: 1rem; color: var(--text-secondary);
  max-width: 460px; margin: 0 auto 2rem; line-height: 1.7;
}

@media (max-width: 600px) {
  .ip-stats { grid-template-columns: 1fr 1fr; }
}

/* ============================================================
   PAGE HERO (inner pages)
   ============================================================ */
.page-hero { padding: 10rem 0 5.5rem; position: relative; text-align: center; overflow: hidden; }
.page-hero::before { content: ''; position: absolute; top: -15%; left: -10%; width: 120%; height: 120%; background: var(--gradient-hero); filter: blur(80px); z-index: 0; }
.page-hero .container { position: relative; z-index: 1; }
.page-hero h1 { font-family: var(--font-display); font-weight: 400; font-size: clamp(2.8rem, 6vw, 4.6rem); line-height: 1.1; letter-spacing: -0.025em; margin-bottom: 1.3rem; animation: fadeUp 0.8s 0.15s ease both; }
.page-hero h1 em { font-style: italic; background: var(--gradient-blue-teal); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.page-hero p { font-size: 1.1rem; max-width: 540px; margin: 0 auto; color: var(--text-secondary); line-height: 1.78; animation: fadeUp 0.8s 0.3s ease both; }

/* ============================================================
   CONTACT
   ============================================================ */
.contact-layout { display: grid; grid-template-columns: 1fr 1.4fr; gap: 4.5rem; align-items: start; }
.contact-info { position: sticky; top: 7rem; }
.contact-info .section-title { margin-bottom: 1.2rem; }
.contact-info .section-desc { margin-bottom: 2.5rem; }
.contact-channels { display: flex; flex-direction: column; gap: 1rem; margin-bottom: 2.5rem; }
.channel-card { display: flex; align-items: flex-start; gap: 1.2rem; padding: 1.4rem 1.5rem; border-radius: var(--radius-md); background: var(--bg-card); border: 1px solid var(--border); transition: all var(--transition-base); box-shadow: var(--shadow-card); }
.channel-card:hover { border-color: var(--border-hover); background: var(--bg-card-hover); transform: translateX(4px); box-shadow: var(--shadow-card-hover); }
.channel-icon { width: 44px; height: 44px; border-radius: var(--radius-sm); flex-shrink: 0; display: flex; align-items: center; justify-content: center; transition: transform var(--transition-base); }
.channel-card:hover .channel-icon { transform: scale(1.08); }
.channel-icon.blue { background: var(--accent-blue-glow); color: var(--accent-blue); }
.channel-icon.teal { background: var(--accent-teal-glow); color: var(--accent-teal); }
.channel-icon.amber { background: var(--accent-amber-glow); color: var(--accent-amber); }
.channel-body { flex: 1; min-width: 0; }
.channel-body strong { display: block; font-size: 0.9rem; font-weight: 650; margin-bottom: 0.3rem; color: var(--text-primary); }
.channel-body span { font-size: 0.85rem; color: var(--text-secondary); }
.channel-body a { color: var(--accent-blue); font-size: 0.85rem; transition: color var(--transition-fast); }
.channel-body a:hover { color: var(--accent-blue-light); }
.social-row { display: flex; gap: 0.7rem; }
.social-btn { width: 42px; height: 42px; border-radius: var(--radius-sm); background: var(--bg-card); border: 1px solid var(--border); display: flex; align-items: center; justify-content: center; color: var(--text-muted); transition: all var(--transition-base); cursor: pointer; text-decoration: none; }
.social-btn:hover { border-color: var(--accent-blue); color: var(--accent-blue); background: var(--accent-blue-glow); transform: translateY(-2px); box-shadow: 0 4px 16px rgba(79,124,255,0.2); }
.contact-form-wrap { background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius-xl); padding: 3rem; position: relative; overflow: hidden; box-shadow: var(--shadow-card); }
.contact-form-wrap::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent, var(--accent-blue), var(--accent-teal), transparent); }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; }
.form-group { display: flex; flex-direction: column; gap: 0.5rem; margin-bottom: 1.25rem; }
.form-group:last-of-type { margin-bottom: 0; }
.form-group label { font-size: 0.78rem; font-weight: 700; color: var(--text-muted); letter-spacing: 0.06em; text-transform: uppercase; }
.form-group input, .form-group select, .form-group textarea { background: var(--bg-secondary); border: 1px solid var(--border); border-radius: var(--radius-md); padding: 0.88rem 1.1rem; font-family: var(--font-body); font-size: 0.92rem; color: var(--text-primary); outline: none; transition: all var(--transition-base); width: 100%; resize: none; -webkit-appearance: none; }
.form-group input::placeholder, .form-group textarea::placeholder { color: var(--text-muted); }
.form-group input:hover, .form-group select:hover, .form-group textarea:hover { border-color: rgba(255,255,255,0.1); background: rgba(255,255,255,0.02); }
.form-group input:focus, .form-group select:focus, .form-group textarea:focus { border-color: var(--border-focus); background: rgba(79,124,255,0.04); box-shadow: 0 0 0 3px rgba(79,124,255,0.12); }
.form-group select { cursor: pointer; }
.form-group select option { background: var(--bg-secondary); color: var(--text-primary); }
.form-group textarea { min-height: 135px; line-height: 1.65; }
.form-submit-row { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; margin-top: 2rem; }
.form-note { font-size: 0.79rem; color: var(--text-muted); max-width: 250px; line-height: 1.55; }
.form-success { display: none; text-align: center; padding: 3rem 1rem; }
.form-success.show { display: block; }
.form-success .check-icon { width: 68px; height: 68px; border-radius: 50%; background: var(--accent-teal-glow); color: var(--accent-teal); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 0 32px rgba(54,214,195,0.15); }
.form-success h3 { font-family: var(--font-display); font-size: 1.9rem; font-weight: 400; margin-bottom: 0.8rem; }
.form-success p { color: var(--text-secondary); font-size: 0.95rem; line-height: 1.75; }

/* ============================================================
   OFFICES
   ============================================================ */
.offices-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.25rem; }
.office-card { padding: 2.2rem; border-radius: var(--radius-md); background: var(--bg-card); border: 1px solid var(--border); transition: all var(--transition-base); position: relative; overflow: hidden; box-shadow: var(--shadow-card); }
.office-card::after { content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent, var(--accent-teal), transparent); opacity: 0; transition: opacity 0.4s; }
.office-card:hover { border-color: var(--border-hover); transform: translateY(-3px); box-shadow: var(--shadow-card-hover); }
.office-card:hover::after { opacity: 1; }
.office-flag { font-size: 2.2rem; margin-bottom: 1rem; line-height: 1; }
.office-card h4 { font-size: 1rem; font-weight: 650; margin-bottom: 0.35rem; }
.office-card .office-role { font-size: 0.72rem; font-weight: 700; letter-spacing: 0.09em; text-transform: uppercase; color: var(--accent-teal); margin-bottom: 1rem; }
.office-card address { font-style: normal; font-size: 0.85rem; color: var(--text-secondary); line-height: 1.7; }

/* ============================================================
   FAQ
   ============================================================ */
.faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; }
.faq-item { padding: 2.2rem; border-radius: var(--radius-md); background: var(--bg-card); border: 1px solid var(--border); transition: all var(--transition-base); box-shadow: var(--shadow-card); position: relative; overflow: hidden; }
.faq-item::before { content: ''; position: absolute; top: 0; left: 0; width: 3px; height: 0; background: var(--gradient-blue-teal); border-radius: 0 2px 2px 0; transition: height var(--transition-slow); }
.faq-item:hover { border-color: var(--border-hover); transform: translateY(-2px); box-shadow: var(--shadow-card-hover); }
.faq-item:hover::before { height: 100%; }
.faq-item h4 { font-size: 0.97rem; font-weight: 650; margin-bottom: 0.65rem; letter-spacing: -0.01em; }
.faq-item p { font-size: 0.875rem; color: var(--text-secondary); line-height: 1.7; }

/* ============================================================
   CAREERS PAGE
   ============================================================ */
.perks-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
}

.perk-card {
  padding: 2.2rem; border-radius: var(--radius-lg);
  border: 1px solid var(--border); background: var(--bg-card);
  transition: all var(--transition-base); box-shadow: var(--shadow-card);
  position: relative; overflow: hidden;
}
.perk-card::before { content: ''; position: absolute; inset: 0; background: var(--gradient-card-shine); opacity: 0; transition: opacity var(--transition-base); }
.perk-card:hover { border-color: var(--border-hover); transform: translateY(-3px); box-shadow: var(--shadow-card-hover); }
.perk-card:hover::before { opacity: 1; }
.perk-icon { width: 48px; height: 48px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.3rem; }
.perk-icon.blue { background: var(--accent-blue-glow); color: var(--accent-blue); }
.perk-icon.teal { background: var(--accent-teal-glow); color: var(--accent-teal); }
.perk-icon.amber { background: var(--accent-amber-glow); color: var(--accent-amber); }
.perk-icon.rose { background: var(--accent-rose-glow); color: var(--accent-rose); }
.perk-card h3 { font-size: 1.05rem; font-weight: 650; margin-bottom: 0.6rem; }
.perk-card p { font-size: 0.88rem; color: var(--text-secondary); line-height: 1.7; }

/* Departments */
.careers-dept { margin-bottom: 2.5rem; }
.careers-dept:last-child { margin-bottom: 0; }

.dept-header {
  display: flex; align-items: center; gap: 1rem;
  margin-bottom: 1.25rem; padding-bottom: 1rem;
  border-bottom: 1px solid var(--border);
}
.dept-icon { width: 38px; height: 38px; border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.dept-icon.blue { background: var(--accent-blue-glow); color: var(--accent-blue); }
.dept-icon.teal { background: var(--accent-teal-glow); color: var(--accent-teal); }
.dept-icon.amber { background: var(--accent-amber-glow); color: var(--accent-amber); }
.dept-icon.rose { background: var(--accent-rose-glow); color: var(--accent-rose); }
.dept-header h3 { font-size: 1.1rem; font-weight: 650; flex: 1; }
.dept-count { font-size: 0.78rem; font-weight: 600; color: var(--text-muted); background: var(--bg-secondary); border: 1px solid var(--border); padding: 0.25rem 0.75rem; border-radius: var(--radius-pill); }

.jobs-list { display: flex; flex-direction: column; gap: 1rem; }

.job-card {
  display: flex; align-items: flex-start; justify-content: space-between; gap: 2rem;
  padding: 1.75rem 2rem; border-radius: var(--radius-md);
  border: 1px solid var(--border); background: var(--bg-card);
  transition: all var(--transition-base); box-shadow: var(--shadow-card);
}
.job-card:hover { border-color: var(--border-hover); background: var(--bg-card-hover); transform: translateX(4px); box-shadow: var(--shadow-card-hover); }

.job-info { flex: 1; }
.job-info h4 { font-size: 1rem; font-weight: 650; margin-bottom: 0.6rem; color: var(--text-primary); }

.job-meta { display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 0.75rem; }
.job-tag {
  font-size: 0.73rem; font-weight: 600; color: var(--text-muted);
  background: var(--bg-secondary); border: 1px solid var(--border);
  padding: 0.2rem 0.7rem; border-radius: var(--radius-pill);
  letter-spacing: 0.02em;
}
.job-info p { font-size: 0.87rem; color: var(--text-secondary); line-height: 1.7; }

.job-apply-btn {
  flex-shrink: 0; align-self: center;
  padding: 0.6rem 1.5rem; border-radius: var(--radius-pill);
  background: var(--accent-blue); color: #fff;
  font-size: 0.84rem; font-weight: 600;
  transition: all var(--transition-base);
  white-space: nowrap;
  box-shadow: 0 4px 16px rgba(79,124,255,0.25);
}
.job-apply-btn:hover { background: var(--accent-blue-light); transform: translateY(-1px); box-shadow: var(--shadow-blue); }

@media (max-width: 900px) {
  .perks-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 600px) {
  .perks-grid { grid-template-columns: 1fr; }
  .job-card { flex-direction: column; gap: 1rem; }
  .job-apply-btn { align-self: flex-start; }
}

/* ============================================================
   SIMPLE LEGAL PAGES (Privacy & Terms)
   ============================================================ */
.simple-legal { padding: 5rem 0 7rem; }

.simple-legal-wrap {
  max-width: 760px;
  margin: 0 auto;
}

.simple-legal-header {
  margin-bottom: 3rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid var(--border);
}

.simple-legal-header h1 {
  font-family: var(--font-display); font-weight: 400;
  font-size: clamp(2.2rem, 5vw, 3.2rem);
  letter-spacing: -0.02em; margin: 0.6rem 0 0.75rem;
  color: var(--text-primary);
}

.simple-legal-header p {
  font-size: 0.85rem; color: var(--text-muted);
}

.simple-legal-body h2 {
  font-size: 1.1rem; font-weight: 650;
  color: var(--text-primary);
  margin: 2.5rem 0 0.75rem;
  padding-bottom: 0.5rem;
  border-bottom: 1px solid var(--border);
}

.simple-legal-body p {
  font-size: 0.94rem; color: var(--text-secondary);
  line-height: 1.85; margin-bottom: 1rem;
}
.simple-legal-body p:last-child { margin-bottom: 0; }

.simple-legal-body strong { color: var(--text-primary); }

.simple-legal-body a {
  color: var(--accent-blue);
  text-decoration: underline;
  text-decoration-color: rgba(79,124,255,0.35);
  text-underline-offset: 2px;
  transition: color var(--transition-fast);
}
.simple-legal-body a:hover { color: var(--accent-blue-light); }

/* ============================================================
   BACK TO TOP BUTTON
   ============================================================ */
.back-to-top {
  position: fixed;
  bottom: 2rem; right: 2rem;
  width: 44px; height: 44px;
  border-radius: 50%;
  background: var(--accent-blue);
  color: #fff; border: none; cursor: pointer;
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 4px 20px rgba(79,124,255,0.4);
  transition: all var(--transition-base);
  opacity: 0; visibility: hidden;
  transform: translateY(12px);
  z-index: 999;
}
.back-to-top.visible {
  opacity: 1; visibility: visible;
  transform: translateY(0);
}
.back-to-top:hover {
  background: var(--accent-blue-light);
  transform: translateY(-3px);
  box-shadow: 0 8px 28px rgba(79,124,255,0.5);
}
.back-to-top:active { transform: translateY(0); }

/* ============================================================
   FAQ ACCORDION & TABS
   ============================================================ */
.faq-tabs {
  display: flex; flex-wrap: wrap; gap: 0.5rem;
  margin-bottom: 2.5rem;
}

.faq-tab {
  padding: 0.5rem 1.2rem;
  border-radius: var(--radius-pill);
  background: var(--bg-card);
  border: 1px solid var(--border);
  color: var(--text-secondary);
  font-size: 0.85rem; font-weight: 500;
  cursor: pointer; font-family: var(--font-body);
  transition: all var(--transition-base);
}
.faq-tab:hover { border-color: var(--border-hover); color: var(--text-primary); }
.faq-tab.active {
  background: var(--accent-blue-glow);
  border-color: rgba(79,124,255,0.4);
  color: var(--accent-blue);
  font-weight: 600;
}

.faq-accordion {
  display: flex; flex-direction: column; gap: 0.75rem;
}

.faq-accordion-item {
  border-radius: var(--radius-md);
  border: 1px solid var(--border);
  background: var(--bg-card);
  overflow: hidden;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
  box-shadow: var(--shadow-card);
}
.faq-accordion-item:hover { border-color: var(--border-hover); }
.faq-accordion-item.open {
  border-color: rgba(79,124,255,0.3);
  box-shadow: 0 4px 24px rgba(79,124,255,0.08);
}

.faq-question {
  width: 100%; display: flex; align-items: center;
  justify-content: space-between; gap: 1rem;
  padding: 1.3rem 1.6rem;
  background: none; border: none; cursor: pointer;
  font-family: var(--font-body);
  font-size: 0.97rem; font-weight: 600;
  color: var(--text-primary);
  text-align: left;
  transition: background var(--transition-base);
}
.faq-question:hover { background: rgba(255,255,255,0.02); }

.faq-icon {
  flex-shrink: 0; color: var(--text-muted);
  transition: transform var(--transition-base), color var(--transition-base);
  display: flex; align-items: center;
}
.faq-accordion-item.open .faq-icon {
  transform: rotate(180deg);
  color: var(--accent-blue);
}

.faq-answer {
  max-height: 0; overflow: hidden;
  transition: max-height 0.4s ease, padding var(--transition-base);
  padding: 0 1.6rem;
}
.faq-accordion-item.open .faq-answer {
  max-height: 400px;
  padding: 0 1.6rem 1.4rem;
}

.faq-answer p {
  font-size: 0.9rem; color: var(--text-secondary);
  line-height: 1.75;
  border-top: 1px solid var(--border);
  padding-top: 1.1rem;
}

/* ============================================================
   BENCHMARK TABLE
   ============================================================ */
.bench-table-wrap {
  border-radius: var(--radius-lg);
  border: 1px solid var(--border);
  overflow: hidden;
  box-shadow: var(--shadow-card);
}

.bench-table {
  width: 100%; border-collapse: collapse;
  font-size: 0.9rem;
}

.bench-table thead tr {
  background: var(--bg-secondary);
  border-bottom: 1px solid var(--border);
}

.bench-table th {
  padding: 1.1rem 1.5rem;
  text-align: left; font-weight: 650;
  font-size: 0.8rem; letter-spacing: 0.04em;
  text-transform: uppercase; color: var(--text-muted);
}

.bench-table th.highlight {
  color: var(--accent-blue);
  background: rgba(79,124,255,0.07);
}

.bench-table tbody tr {
  border-bottom: 1px solid var(--border);
  background: var(--bg-card);
  transition: background var(--transition-fast);
}

.bench-table tbody tr:last-child { border-bottom: none; }
.bench-table tbody tr:hover { background: var(--bg-card-hover); }

.bench-table td {
  padding: 1rem 1.5rem;
  color: var(--text-secondary);
}

.bench-table td:first-child {
  color: var(--text-primary); font-weight: 500;
}

.bench-table td.highlight {
  background: rgba(79,124,255,0.05);
  font-weight: 600;
}

.bench-table td.highlight.good {
  color: var(--accent-teal);
}

@media (max-width: 700px) {
  .bench-table th, .bench-table td { padding: 0.85rem 1rem; font-size: 0.82rem; }
}

/* ============================================================
   FOOTER
   ============================================================ */
footer { border-top: 1px solid var(--border); padding: 3.5rem 0; }
.footer-inner { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem; }
.footer-left { display: flex; align-items: center; gap: 1rem; }
.footer-left span { font-size: 0.84rem; color: var(--text-muted); }
.footer-links { display: flex; gap: 2rem; }
.footer-links a { font-size: 0.84rem; color: var(--text-muted); transition: color var(--transition-base); }
.footer-links a:hover { color: var(--text-primary); }

/* ============================================================
   SCROLL ANIMATIONS
   ============================================================ */
.reveal { opacity: 0; transform: translateY(36px); transition: opacity 0.75s ease, transform 0.75s ease; }
.reveal.visible { opacity: 1; transform: translateY(0); }

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 900px) {
  .features-grid { grid-template-columns: 1fr 1fr; }
  .pipeline { grid-template-columns: 1fr 1fr; }
  .pipeline::before { display: none; }
  .innovation-grid { grid-template-columns: 1fr; }
  .arch-wrapper { grid-template-columns: 1fr; }
  .benchmarks-grid { grid-template-columns: 1fr 1fr; }
  .hero-stats { grid-template-columns: 1fr 1fr; }
  .langs-row { grid-template-columns: 1fr; }
  .nav-links { display: none; }
  .nav-toggle { display: block; }
  .nav-links.open {
    display: flex; flex-direction: column;
    position: absolute; top: 100%; left: 0; right: 0;
    background: rgba(7,7,13,0.97);
    backdrop-filter: blur(24px);
    padding: 1.5rem 2rem; gap: 0.5rem;
    border-bottom: 1px solid var(--border);
  }
  .nav-links.open a { padding: 0.6rem 0.9rem; }
}

@media (max-width: 960px) {
  .contact-layout { grid-template-columns: 1fr; gap: 3rem; }
  .contact-info { position: static; }
  .faq-grid { grid-template-columns: 1fr; }
  .offices-grid { grid-template-columns: 1fr 1fr; }
}

@media (max-width: 600px) {
  .features-grid { grid-template-columns: 1fr; }
  .benchmarks-grid { grid-template-columns: 1fr; }
  .hero-stats { grid-template-columns: 1fr 1fr; }
  .pipeline { grid-template-columns: 1fr; }
  .arch-specs { grid-template-columns: 1fr; }
  .footer-inner { flex-direction: column; text-align: center; }
  .form-row { grid-template-columns: 1fr; }
  .contact-form-wrap { padding: 2rem 1.5rem; }
  .offices-grid { grid-template-columns: 1fr; }
  .form-submit-row { flex-direction: column; align-items: flex-start; }
  section { padding: 5rem 0; }
  .page-hero { padding: 8rem 0 4rem; }
}

/* ============================================================
   KEYFRAMES
   ============================================================ */
@keyframes spin { to { transform: rotate(360deg); } }
</style>
</head>
<body>

<!-- ====== NAVBAR ====== -->
@include('frontend.layouts.header')

@yield('content')

<!-- ====== FOOTER ====== -->
@include('frontend.layouts.footer')

<!-- ====== BACK TO TOP ====== -->
<button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" title="Back to top">
  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
    <path d="M18 15l-6-6-6 6"/>
  </svg>
</button>

<script>
// ── Scroll reveal ──────────────────────────────────────────
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.08, rootMargin: '0px 0px -50px 0px' });
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// ── Bench bar animation ────────────────────────────────────
const barObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.querySelectorAll('.bench-bar-fill').forEach(fill => {
        const targetW = fill.getAttribute('data-width') || fill.style.width;
        fill.setAttribute('data-width', targetW);
        fill.style.width = '0';
        requestAnimationFrame(() => {
          setTimeout(() => { fill.style.width = targetW; }, 150);
        });
      });
      barObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.3 });
document.querySelectorAll('.benchmarks-grid').forEach(el => barObserver.observe(el));

// ── Back to Top ────────────────────────────────────────────
const backToTop = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
  backToTop.classList.toggle('visible', window.scrollY > 400);
}, { passive: true });
const nav = document.querySelector('nav');
window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 60);
}, { passive: true });

// ── Contact form ───────────────────────────────────────────
function handleSubmit(e) {
  e.preventDefault();
  const form = document.getElementById('contactForm');
  const btn  = document.getElementById('submitBtn');
  const success = document.getElementById('formSuccess');
  const required = form.querySelectorAll('[required]');
  let valid = true;
  required.forEach(field => {
    if (!field.value.trim()) {
      valid = false;
      field.style.borderColor = 'var(--accent-rose)';
      field.addEventListener('input', () => field.style.borderColor = '', { once: true });
    }
  });
  if (!valid) return;
  btn.disabled = true;
  btn.innerHTML = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" style="animation:spin 1s linear infinite"><path d="M21 12a9 9 0 11-18 0"/></svg> Sending…`;
  setTimeout(() => { form.style.display = 'none'; success.classList.add('show'); }, 1400);
}
</script>
</body>
</html>
