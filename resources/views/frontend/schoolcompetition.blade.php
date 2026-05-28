@extends('frontend.layouts.mastercompetition')

@section('content')
<style>
  
    .school-comp-page {
        background-color: #142125;
        color: #ffffff;
        font-family: 'Inter', sans-serif;
        position: relative;
        overflow: hidden;
        padding-bottom: 80px;
    }

    /* Dot Grid Background Pattern */
    .school-comp-page::after {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(circle, rgba(107, 192, 68, 0.05) 1px, transparent 1px);
        background-size: 32px 32px;
        pointer-events: none;
        z-index: 0;
    }

    /* Glow Highlights */
    .glow-accent {
        position: absolute;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(107, 192, 68, 0.08) 0%, transparent 70%);
        pointer-events: none;
        z-index: 0;
    }

    /* Page Hero Section */
    .comp-hero {
        position: relative;
        padding: 100px 0;
        min-height: 620px;
        display: flex;
        align-items: center;
        background: linear-gradient(180deg, rgba(10, 17, 19, 0.6) 0%, rgba(20, 33, 37, 0.9) 100%);
        border-bottom: 1px solid rgba(107, 192, 68, 0.15);
        z-index: 1;
        overflow: hidden;
    }

    .comp-hero::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent 0%, rgba(107, 192, 68, 0.5) 50%, transparent 100%);
        z-index: 2;
    }

    /* Full-width right-side image (extends to viewport edge) */
    .comp-hero-image-wrap {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 52%;
        border-radius: 0;
        overflow: hidden;
        border: none;
        border-left: 1px solid rgba(107, 192, 68, 0.2);
        box-shadow: -25px 0 60px rgba(0, 0, 0, 0.5), 0 0 50px rgba(107, 192, 68, 0.1);
        z-index: 1;
    }

    .comp-hero-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.7s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .comp-hero-image-wrap:hover .comp-hero-image {
        transform: scale(1.04);
    }

    .comp-hero-image-glow {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(20, 33, 37, 0.55) 0%, transparent 35%, rgba(107, 192, 68, 0.05) 100%);
        pointer-events: none;
        z-index: 2;
    }

    .comp-hero-image-wrap::before {
        content: '';
        position: absolute;
        top: -140px;
        right: -140px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(107, 192, 68, 0.18) 0%, transparent 70%);
        pointer-events: none;
        z-index: 3;
    }

    .comp-hero-content {
        position: relative;
        z-index: 5;
        max-width: 560px;
        padding-right: 30px;
    }

    .comp-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #6BC044;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 8px 18px;
        background: rgba(107, 192, 68, 0.08);
        border: 1px solid rgba(107, 192, 68, 0.25);
        border-radius: 30px;
        margin-bottom: 25px;
    }

    .comp-hero-badge .badge-dot {
        width: 6px;
        height: 6px;
        background: #6BC044;
        border-radius: 50%;
        display: inline-block;
        box-shadow: 0 0 8px rgba(107, 192, 68, 0.8);
        animation: pulse-indicator 1.8s infinite;
    }

    .comp-hero-title {
        font-size: 64px;
        font-weight: 800;
        letter-spacing: -2px;
        line-height: 1.05;
        margin-bottom: 22px;
        text-transform: uppercase;
    }

    .comp-hero-title span {
        color: #6BC044;
        background: linear-gradient(135deg, #25b023 0%, #6BC044 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: block;
    }

    .comp-hero-subtitle {
        font-size: 17px;
        color: rgba(255, 255, 255, 0.78);
        margin: 0;
        line-height: 1.75;
    }

    @media (max-width: 991px) {
        .comp-hero {
            padding: 100px 0 60px;
            min-height: auto;
            display: block;
            text-align: center;
        }

        .comp-hero-image-wrap {
            position: relative;
            top: auto;
            right: auto;
            bottom: auto;
            width: 100%;
            aspect-ratio: 4 / 3;
            border-radius: 0;
            border: none;
            border-top: 1px solid rgba(107, 192, 68, 0.2);
            border-bottom: 1px solid rgba(107, 192, 68, 0.2);
            margin-top: 50px;
        }

        .comp-hero-content {
            max-width: 100%;
            padding-right: 0;
            margin: 0 auto;
        }

        .comp-hero-title {
            font-size: 44px;
        }
    }

    /* Section Global Headers */
    .section-header-custom {
        margin-bottom: 50px;
        position: relative;
        z-index: 1;
    }

    .section-tag-custom {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #6BC044;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 6px 16px;
        background: rgba(107, 192, 68, 0.08);
        border: 1px solid rgba(107, 192, 68, 0.25);
        border-radius: 30px;
        margin-bottom: 20px;
    }

    .section-title-custom {
        font-size: 42px;
        font-weight: 700;
        letter-spacing: -1px;
        margin-top: 10px;
    }

    .section-title-custom span {
        font-weight: 300;
        color: rgba(255, 255, 255, 0.65);
    }

    /* Registration Announcement Card */
    .announcement-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.01) 100%);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(107, 192, 68, 0.2);
        border-radius: 24px;
        padding: 50px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        margin-top: -40px;
        z-index: 5;
        transition: border-color 0.3s;
    }

    .announcement-card:hover {
        border-color: rgba(107, 192, 68, 0.4);
    }

    .announcement-card::before {
        content: '';
        position: absolute;
        top: -150px;
        right: -150px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(107, 192, 68, 0.12) 0%, transparent 70%);
        pointer-events: none;
    }

    .announcement-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(107, 192, 68, 0.15);
        color: #6BC044;
        font-weight: 700;
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 14px;
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 0 15px rgba(107, 192, 68, 0.2);
        border: 1px solid rgba(107, 192, 68, 0.4);
    }

    .announcement-badge .live-indicator {
        width: 8px;
        height: 8px;
        background-color: #6BC044;
        border-radius: 50%;
        display: inline-block;
        animation: pulse-indicator 1.8s infinite;
    }

    @keyframes pulse-indicator {
        0% { transform: scale(0.9); box-shadow: 0 0 0 0 rgba(107, 192, 68, 0.7); }
        70% { transform: scale(1.1); box-shadow: 0 0 0 8px rgba(107, 192, 68, 0); }
        100% { transform: scale(0.9); box-shadow: 0 0 0 0 rgba(107, 192, 68, 0); }
    }

    .announcement-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .announcement-desc {
        font-size: 16px;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 30px;
    }

    .period-box {
        background: rgba(0, 0, 0, 0.25);
        border-left: 4px solid #6BC044;
        padding: 20px 25px;
        border-radius: 0 12px 12px 0;
        margin-bottom: 35px;
    }

    .period-title {
        font-size: 13px;
        text-transform: uppercase;
        color: #6BC044;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 5px;
    }

    .period-value {
        font-size: 20px;
        font-weight: 600;
        color: #ffffff;
    }

    .announcement-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    /* Custom high-end CTA buttons */
    .cta-btn-primary {
        background: linear-gradient(135deg, #25b023 0%, #6BC044 100%);
        color: #142125 !important;
        font-weight: 700;
        font-size: 15px;
        padding: 16px 36px;
        border-radius: 30px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 10px 25px rgba(107, 192, 68, 0.35);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: none;
    }

    .cta-btn-primary:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 15px 30px rgba(107, 192, 68, 0.5);
    }

    .cta-btn-secondary {
        background: transparent;
        color: #ffffff !important;
        font-weight: 600;
        font-size: 15px;
        padding: 15px 35px;
        border-radius: 30px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .cta-btn-secondary:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: #6BC044;
        color: #6BC044 !important;
        transform: translateY(-2px);
    }

    /* 3-Column Announcement Cards */
    .announce-cards-row {
        margin-top: 5px;
    }

    .announce-card-item {
        background: rgba(0, 0, 0, 0.25);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        padding: 32px 24px;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 16px;
        transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
        position: relative;
        overflow: hidden;
    }

    .announce-card-item:hover {
        border-color: rgba(107, 192, 68, 0.3);
        background: rgba(0, 0, 0, 0.35);
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    }

    .announce-card-item.is-period {
        border-left: 4px solid #6BC044;
    }

    .announce-card-icon {
        width: 52px;
        height: 52px;
        border-radius: 12px;
        background: rgba(107, 192, 68, 0.1);
        border: 1px solid rgba(107, 192, 68, 0.25);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #6BC044;
        flex-shrink: 0;
    }

    .announce-card-icon svg {
        width: 24px;
        height: 24px;
    }

    .announce-card-label {
        font-size: 12px;
        text-transform: uppercase;
        color: #6BC044;
        font-weight: 700;
        letter-spacing: 1.2px;
        margin-bottom: -8px;
    }

    .announce-card-value {
        font-size: 19px;
        font-weight: 600;
        color: #ffffff;
        line-height: 1.35;
    }

    .announce-card-value > span {
        display: block;
    }

    .announce-card-value .date-sep {
        color: #6BC044;
        font-size: 22px;
        font-weight: 400;
        line-height: 1;
        margin: 6px 0;
    }

    .announce-card-desc {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
        line-height: 1.65;
        margin: 0;
        flex-grow: 1;
    }

    .announce-card-cta {
        margin-top: auto;
    }

    .announce-card-cta.cta-btn-primary {
        padding: 13px 26px;
        font-size: 14px;
        box-shadow: 0 8px 18px rgba(107, 192, 68, 0.3);
    }

    .announce-card-cta.cta-btn-secondary {
        padding: 12px 25px;
        font-size: 14px;
    }

    /* Schools & Accepted Table Layouts */
    .schools-grid,
    .accepted-list-grid {
        margin-top: 80px;
        position: relative;
        z-index: 2;
    }

    .accepted-list-grid {
        margin-top: 60px;
    }

    /* Flat (borderless) variant — strips panel chrome and section margins */
    .schools-grid.flat,
    .accepted-list-grid.flat {
        margin-top: 100px;
    }

    @media (max-width: 991px) {
        .schools-grid.flat,
        .accepted-list-grid.flat {
            margin-top: 60px;
        }
    }

    .school-card-panel.flat {
        background: transparent;
        border: none;
        box-shadow: none;
        padding: 30px 0;
    }

    .school-card-panel.flat:hover {
        border: none;
        box-shadow: none;
    }

    /* ------- Attractive Registered Participants Layout ------- */
    .rp-content {
        padding-right: 30px;
    }

    .rp-tag {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #6BC044;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 7px 18px;
        background: rgba(107, 192, 68, 0.08);
        border: 1px solid rgba(107, 192, 68, 0.25);
        border-radius: 30px;
        margin-bottom: 22px;
    }

    .rp-tag .dot {
        width: 6px;
        height: 6px;
        background: #6BC044;
        border-radius: 50%;
        display: inline-block;
        box-shadow: 0 0 8px rgba(107, 192, 68, 0.8);
        animation: pulse-indicator 1.8s infinite;
    }

    .rp-title {
        font-size: 46px;
        font-weight: 700;
        letter-spacing: -1.5px;
        line-height: 1.1;
        margin-bottom: 22px;
        color: #ffffff;
    }

    .rp-title span {
        color: #6BC044;
        background: linear-gradient(135deg, #25b023 0%, #6BC044 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .rp-desc {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.78);
        line-height: 1.75;
        margin-bottom: 30px;
    }

    .rp-quick-stats {
        display: flex;
        gap: 30px;
        flex-wrap: wrap;
        margin-top: 30px;
        padding-top: 26px;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
    }

    .rp-stat-item {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .rp-stat-icon {
        width: 44px;
        height: 44px;
        background: rgba(107, 192, 68, 0.1);
        border: 1px solid rgba(107, 192, 68, 0.25);
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #6BC044;
        flex-shrink: 0;
    }

    .rp-stat-icon svg {
        width: 20px;
        height: 20px;
    }

    .rp-stat-text strong {
        display: block;
        color: #6BC044;
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 2px;
    }

    .rp-stat-text span {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.6);
    }

    /* Right column visual */
    .rp-visual {
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .rp-image-wrap {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid rgba(107, 192, 68, 0.2);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5), 0 0 40px rgba(107, 192, 68, 0.08);
        flex: 1;
        min-height: 520px;
        margin-bottom: 0;
    }

    .rp-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.7s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .rp-image-wrap:hover img {
        transform: scale(1.04);
    }

    .rp-image-wrap::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 40%, rgba(10, 17, 19, 0.85) 100%);
        pointer-events: none;
        z-index: 1;
    }

    .rp-image-badge {
        position: absolute;
        top: 22px;
        left: 22px;
        background: linear-gradient(135deg, #25b023 0%, #6BC044 100%);
        color: #142125;
        padding: 16px 22px;
        border-radius: 16px;
        box-shadow: 0 12px 30px rgba(107, 192, 68, 0.4);
        z-index: 5;
        min-width: 130px;
    }

    .rp-image-badge .big-number {
        font-size: 30px;
        font-weight: 800;
        line-height: 1;
        margin-bottom: 4px;
    }

    .rp-image-badge .label {
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0.85;
    }

    .rp-image-mini-badge {
        position: absolute;
        bottom: 50px;
        right: -16px;
        background: #142125;
        border: 1px solid rgba(107, 192, 68, 0.3);
        color: #ffffff;
        padding: 14px 20px;
        border-radius: 14px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.45);
        z-index: 5;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .rp-image-mini-badge .mini-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(107, 192, 68, 0.12);
        color: #6BC044;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .rp-image-mini-badge .mini-text strong {
        display: block;
        font-size: 16px;
        font-weight: 700;
        color: #ffffff;
        line-height: 1.1;
    }

    .rp-image-mini-badge .mini-text span {
        font-size: 11px;
        color: rgba(255, 255, 255, 0.6);
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }

    /* Important Alert floating badge at bottom of image */
    .rp-image-alert-badge {
        position: absolute;
        left: 22px;
        right: 22px;
        bottom: 22px;
        background: rgba(10, 17, 19, 0.85);
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        border: 1px solid rgba(255, 178, 0, 0.35);
        border-radius: 18px;
        padding: 18px 20px;
        z-index: 6;
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.55);
    }

    .rp-image-alert-badge .alert-badge-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
    }

    .rp-image-alert-badge .alert-icon-wrap {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: linear-gradient(135deg, #ffb200 0%, #ff8a00 100%);
        color: #142125;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 6px 16px rgba(255, 178, 0, 0.35);
    }

    .rp-image-alert-badge .alert-icon-wrap svg {
        width: 18px;
        height: 18px;
    }

    .rp-image-alert-badge .alert-pill {
        background: rgba(255, 178, 0, 0.12);
        color: #ffb200;
        border: 1px solid rgba(255, 178, 0, 0.35);
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .rp-image-alert-badge .alert-badge-body {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .rp-image-alert-badge .alert-text-line {
        margin: 0;
        font-size: 13px;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.55;
    }

    .rp-image-alert-badge .alert-text-line strong {
        color: #ffffff;
        font-weight: 700;
    }

    .rp-image-alert-badge .alert-text-line.deadline {
        padding-top: 8px;
        border-top: 1px dashed rgba(255, 255, 255, 0.1);
    }

    .rp-image-alert-badge .alert-text-line.deadline strong {
        color: #ffb200;
    }

    /* Success variant of alert badge (used for Accepted List section) */
    .rp-image-alert-badge.success {
        border-color: rgba(107, 192, 68, 0.4);
    }

    .rp-image-alert-badge.success .alert-icon-wrap {
        background: linear-gradient(135deg, #25b023 0%, #6BC044 100%);
        color: #142125;
        box-shadow: 0 6px 16px rgba(107, 192, 68, 0.35);
    }

    .rp-image-alert-badge.success .alert-pill {
        background: rgba(107, 192, 68, 0.12);
        color: #6BC044;
        border-color: rgba(107, 192, 68, 0.35);
    }

    .rp-image-alert-badge.success .alert-text-line.deadline strong {
        color: #6BC044;
    }

    @media (max-width: 991px) {
        .rp-content {
            padding-right: 0;
        }

        .rp-title {
            font-size: 36px;
        }

        .rp-visual {
            height: auto;
        }

        .rp-image-wrap {
            flex: none;
            aspect-ratio: 4 / 4;
            min-height: 460px;
        }

        .rp-image-mini-badge {
            right: 0;
        }

        .rp-image-alert-badge {
            left: 16px;
            right: 16px;
            bottom: 16px;
            padding: 14px 16px;
        }

        .rp-image-alert-badge .alert-text-line {
            font-size: 12px;
        }
    }

    .school-card-panel {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 20px;
        padding: 30px;
        height: 100%;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        transition: all 0.3s;
    }

    .school-card-panel:hover {
        border-color: rgba(107, 192, 68, 0.2);
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.3);
    }

    .panel-header-wrap {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        padding-bottom: 15px;
    }

    .panel-title {
        font-size: 22px;
        font-weight: 700;
    }

    .panel-badge {
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        padding: 4px 12px;
        border-radius: 20px;
        letter-spacing: 0.5px;
    }

    .panel-badge.registered {
        background: rgba(67, 186, 255, 0.1);
        color: #43BAFF;
        border: 1px solid rgba(67, 186, 255, 0.3);
    }

    .panel-badge.accepted {
        background: rgba(107, 192, 68, 0.1);
        color: #6BC044;
        border: 1px solid rgba(107, 192, 68, 0.3);
    }

    .table-responsive-custom {
        overflow-x: auto;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }

    .custom-table th {
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: rgba(255, 255, 255, 0.5);
        padding: 12px 15px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.08);
        font-weight: 600;
    }

    .custom-table td {
        font-size: 14px;
        padding: 16px 15px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        vertical-align: middle;
    }

    .custom-table tr:last-child td {
        border-bottom: none;
    }

    .team-name-cell {
        font-weight: 600;
        color: #ffffff;
    }

    .school-name-cell {
        color: rgba(255, 255, 255, 0.7);
        font-size: 13px;
        margin-top: 3px;
    }

    .status-badge {
        font-size: 11px;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: 12px;
        display: inline-block;
    }

    .status-badge.accepted {
        background: rgba(107, 192, 68, 0.15);
        color: #6BC044;
    }

    .status-badge.reviewing {
        background: rgba(255, 193, 7, 0.15);
        color: #ffc107;
    }

    .status-badge.verified {
        background: rgba(67, 186, 255, 0.15);
        color: #43BAFF;
    }

    /* Past Winners / Year Dropdowns Accordions */
    .past-winners-sec {
        margin-top: 100px;
        position: relative;
        z-index: 2;
    }

    .winners-dropdown-wrap {
        display: flex;
        flex-direction: column;
        gap: 20px;
        max-width: 900px;
        margin: 0 auto;
    }

    .winner-year-accordion {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .winner-year-accordion.active {
        border-color: rgba(107, 192, 68, 0.4);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3), 0 0 20px rgba(107, 192, 68, 0.08);
    }

    .accordion-trigger {
        padding: 24px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        background: transparent;
        transition: background 0.3s;
        user-select: none;
    }

    .accordion-trigger:hover {
        background: rgba(255, 255, 255, 0.04);
    }

    .trigger-left {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .accordion-year-badge {
        font-size: 18px;
        font-weight: 800;
        background: linear-gradient(135deg, #25b023 0%, #6BC044 100%);
        color: #142125;
        padding: 6px 16px;
        border-radius: 30px;
        letter-spacing: -0.5px;
    }

    .accordion-trigger-title {
        font-size: 20px;
        font-weight: 700;
        color: #ffffff;
    }

    .accordion-icon {
        font-size: 20px;
        transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        color: rgba(255, 255, 255, 0.6);
    }

    .winner-year-accordion.active .accordion-icon {
        transform: rotate(180deg);
        color: #6BC044;
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
        background: rgba(0, 0, 0, 0.15);
    }

    .accordion-content-inner {
        padding: 30px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    /* Winner Cards - 3 Column Grid */
    .winner-pods-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 36px 30px;
        padding-top: 10px;
    }

    .winner-card {
        position: relative;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.01) 100%);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 22px;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        padding-bottom: 30px;
    }

    .winner-card:hover {
        transform: translateY(-6px);
        border-color: rgba(107, 192, 68, 0.25);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5), 0 0 30px rgba(107, 192, 68, 0.08);
    }

    .winner-card-image {
        position: relative;
        width: 100%;
        aspect-ratio: 4 / 3;
        border-radius: 22px 22px 0 0;
        overflow: hidden;
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }

    .winner-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .winner-card:hover .winner-card-image img {
        transform: scale(1.08);
    }

    .winner-card-image::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 55%, rgba(20, 33, 37, 0.85) 100%);
        pointer-events: none;
    }

    .winner-card-body {
        padding: 24px 24px 0;
        text-align: center;
    }

    .winner-card-team {
        font-size: 20px;
        font-weight: 700;
        color: #ffffff;
        margin: 0 0 8px;
        letter-spacing: -0.3px;
    }

    .winner-card-school {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.6);
        margin: 0 0 20px;
        line-height: 1.5;
    }

    .winner-card-trophy {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.4px;
        padding: 7px 16px;
        border-radius: 30px;
        border: 1px solid transparent;
    }

    .winner-card-trophy svg {
        width: 13px;
        height: 13px;
    }

    /* Rank-specific trophy colors */
    .winner-card.rank-1 .winner-card-trophy {
        color: #f5b041;
        background: rgba(245, 176, 65, 0.1);
        border-color: rgba(245, 176, 65, 0.35);
        box-shadow: 0 0 18px rgba(245, 176, 65, 0.18);
    }

    .winner-card.rank-2 .winner-card-trophy {
        color: #d6dadc;
        background: rgba(189, 195, 199, 0.1);
        border-color: rgba(189, 195, 199, 0.35);
        box-shadow: 0 0 18px rgba(189, 195, 199, 0.16);
    }

    .winner-card.rank-3 .winner-card-trophy {
        color: #dc7633;
        background: rgba(220, 118, 51, 0.1);
        border-color: rgba(220, 118, 51, 0.35);
        box-shadow: 0 0 18px rgba(220, 118, 51, 0.18);
    }

    /* Top-corner rank ribbon */
    .winner-card-rank-pill {
        position: absolute;
        top: 16px;
        left: 16px;
        z-index: 4;
        background: rgba(10, 17, 19, 0.75);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        color: #ffffff;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        padding: 6px 14px;
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.12);
    }

    .winner-card.rank-1 .winner-card-rank-pill {
        border-color: rgba(245, 176, 65, 0.5);
        color: #f5b041;
    }

    .winner-card.rank-2 .winner-card-rank-pill {
        border-color: rgba(189, 195, 199, 0.5);
        color: #d6dadc;
    }

    .winner-card.rank-3 .winner-card-rank-pill {
        border-color: rgba(220, 118, 51, 0.5);
        color: #dc7633;
    }

    @media (max-width: 991px) {
        .winner-pods-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 32px 24px;
        }
    }

    @media (max-width: 575px) {
        .winner-pods-grid {
            grid-template-columns: 1fr;
            gap: 28px;
        }
    }

    /* Image Gallery Section */
    .gallery-sec {
        margin-top: 100px;
        position: relative;
        z-index: 2;
    }

    /* Masonry-style gallery using CSS columns */
    .gallery-grid {
        columns: 3;
        column-gap: 22px;
    }

    @media (max-width: 991px) {
        .gallery-grid {
            columns: 2;
            column-gap: 18px;
        }
    }

    @media (max-width: 575px) {
        .gallery-grid {
            columns: 1;
        }
    }

    .gallery-card {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        aspect-ratio: 4 / 3;
        border: 1px solid rgba(255, 255, 255, 0.05);
        background: rgba(255, 255, 255, 0.01);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        margin-bottom: 22px;
        break-inside: avoid;
        display: block;
        transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.4s ease;
    }

    .gallery-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45), 0 0 25px rgba(107, 192, 68, 0.08);
        border-color: rgba(107, 192, 68, 0.2);
    }

    /* Masonry aspect-ratio variants for visual rhythm */
    .gallery-card.is-tall {
        aspect-ratio: 3 / 4;
    }

    .gallery-card.is-wide {
        aspect-ratio: 4 / 3;
    }

    .gallery-card.is-square {
        aspect-ratio: 1 / 1;
    }

    .gallery-card.is-portrait {
        aspect-ratio: 4 / 5;
    }

    .gallery-card.is-landscape {
        aspect-ratio: 16 / 10;
    }

    .gallery-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .gallery-card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(0deg, rgba(20, 33, 37, 0.95) 0%, rgba(20, 33, 37, 0.3) 60%, transparent 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 24px;
        opacity: 0;
        transition: opacity 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .gallery-card:hover img {
        transform: scale(1.08);
    }

    .gallery-card:hover .gallery-card-overlay {
        opacity: 1;
    }

    .gallery-card-title {
        font-size: 18px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 5px;
    }

    .gallery-card-tag {
        font-size: 12px;
        color: #6BC044;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Registered Participants Styling */
    .participants-info-wrap {
        display: flex;
        flex-direction: column;
        gap: 25px;
        margin-top: 15px;
    }

    .participants-intro {
        font-size: 15px;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.85);
        margin: 0;
    }

    .resource-cards-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .download-resource-card {
        display: flex;
        align-items: center;
        gap: 20px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 14px;
        padding: 18px 22px;
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        text-decoration: none !important;
        position: relative;
        overflow: hidden;
    }

    .download-resource-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(107, 192, 68, 0.05) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .download-resource-card:hover::before {
        opacity: 1;
    }

    .download-resource-card:hover {
        transform: translateY(-2px);
        background: rgba(255, 255, 255, 0.04);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .download-resource-card.pdf-style:hover {
        border-color: rgba(231, 76, 60, 0.4);
        box-shadow: 0 8px 25px rgba(231, 76, 60, 0.1);
    }

    .download-resource-card.excel-style:hover {
        border-color: rgba(46, 204, 113, 0.4);
        box-shadow: 0 8px 25px rgba(46, 204, 113, 0.1);
    }

    .resource-icon-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.04);
        flex-shrink: 0;
        transition: all 0.3s;
    }

    .pdf-style .resource-icon-wrap {
        color: #e74c3c;
        background: rgba(231, 76, 60, 0.08);
        border: 1px solid rgba(231, 76, 60, 0.15);
    }

    .excel-style .resource-icon-wrap {
        color: #2ec471;
        background: rgba(46, 204, 113, 0.08);
        border: 1px solid rgba(46, 204, 113, 0.15);
    }

    .download-resource-card:hover .resource-icon-wrap {
        transform: scale(1.05);
    }

    .resource-details {
        flex-grow: 1;
    }

    .resource-title {
        font-size: 16px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 4px;
        transition: color 0.3s;
    }

    .pdf-style:hover .resource-title {
        color: #e74c3c;
    }

    .excel-style:hover .resource-title {
        color: #2ec471;
    }

    .resource-meta {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.5);
    }

    .resource-action-icon {
        color: rgba(255, 255, 255, 0.3);
        transition: all 0.3s;
        font-size: 14px;
    }

    .download-resource-card:hover .resource-action-icon {
        color: #ffffff;
        transform: translateX(4px);
    }

    .pdf-style:hover .resource-action-icon {
        color: #e74c3c;
    }

    .excel-style:hover .resource-action-icon {
        color: #2ec471;
    }

    /* Notice Box */
    .important-notice-box {
        background: linear-gradient(135deg, rgba(243, 156, 18, 0.06) 0%, rgba(243, 156, 18, 0.02) 100%);
        border-left: 4px solid #f39c12;
        border-radius: 0 16px 16px 0;
        padding: 22px 25px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        border-top: 1px solid rgba(243, 156, 18, 0.1);
        border-right: 1px solid rgba(243, 156, 18, 0.05);
        border-bottom: 1px solid rgba(243, 156, 18, 0.05);
    }

    .notice-header {
        margin-bottom: 12px;
        display: flex;
        align-items: center;
    }

    .notice-badge {
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
        color: #f39c12;
        letter-spacing: 1.5px;
        background: rgba(243, 156, 18, 0.12);
        padding: 4px 12px;
        border-radius: 20px;
        border: 1px solid rgba(243, 156, 18, 0.2);
    }

    .notice-body {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .notice-text {
        font-size: 14px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.8);
        margin: 0;
    }

    .notice-text strong {
        color: #ffffff;
    }

    .notice-text.deadline-text {
        color: #f5b041;
        background: rgba(243, 156, 18, 0.04);
        padding: 10px 14px;
        border-radius: 8px;
        border: 1px dashed rgba(243, 156, 18, 0.15);
    }

    .notice-text.deadline-text strong {
        color: #f39c12;
    }

    /* Video Submission Box */
    .video-submission-box {
        display: flex;
        flex-direction: column;
        gap: 15px;
        background: rgba(255, 255, 255, 0.01);
        border: 1px solid rgba(255, 255, 255, 0.04);
        border-radius: 16px;
        padding: 20px;
    }

    .submission-meta {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .submission-label {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.5);
        letter-spacing: 1px;
    }

    .submission-btn {
        margin-top: 5px;
    }

    .submission-help {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.5);
        text-align: center;
        margin: 5px 0 0 0;
    }
</style>

<div class="school-comp-page">
    
    <!-- Hero / Title Header -->
    <section class="comp-hero">
        <div class="glow-accent" style="top: -200px; left: 20%; transform: translateX(-50%);"></div>

        <!-- Right-side full-width banner image (extends to viewport edge) -->
        <div class="comp-hero-image-wrap">
            <img src="{{ asset('frontend/image/competition-banner/SLIIT-Robofest-event-register-banner.jpg') }}"
                 alt="SLIIT Robofest 2026 School Competition"
                 class="comp-hero-image">
            <div class="comp-hero-image-glow"></div>
        </div>

        <!-- Left-side content: Title & Description -->
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="comp-hero-content">
                        <div class="comp-hero-badge">
                            <span class="badge-dot"></span>
                            Registrations Now OPEN!
                        </div>
                        <h1 class="comp-hero-title">
                            School <span>Competition</span>
                        </h1>
                        <p class="comp-hero-subtitle">
                            We are excited to announce that registrations for the <strong>SLIIT ROBOFEST 2026 – School Category</strong> are now officially open!
                            <br><br>
                            Don't miss this chance to highlight your creativity, engineering skills, and analytical thinking in one of the most dynamic robotics competitions of the year.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="tf-container">
        
        <!-- Registration Announcement Card -->
        <section class="row justify-content-center">
            <div class="col-lg-10">
                <div class="announcement-card">
                   
                   
                    
                    <!-- 3-Column Announcement Cards -->
                    <div class="row gy-4 announce-cards-row">
                        <!-- Card 1: Registration Period -->
                        <div class="col-md-4">
                            <div class="announce-card-item is-period">
                                <div class="announce-card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                </div>
                                <div class="announce-card-label">Registration Period</div>
                                <div class="announce-card-value">
                                    <span>28th April 2026</span>
                                    <span class="date-sep">–</span>
                                    <span>31st July 2026</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Register Now -->
                        <div class="col-md-4">
                            <div class="announce-card-item">
                                <div class="announce-card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </div>
                                <p class="announce-card-desc">All interested school teams are encouraged to register early and begin preparations.</p>
                                <a href="/register" class="cta-btn-primary announce-card-cta">
                                    Register Now
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Card 3: View Document -->
                        <div class="col-md-4">
                            <div class="announce-card-item">
                                <div class="announce-card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </div>
                                <p class="announce-card-desc">Download the official competition document for complete guidelines, rules, and technical specifications.</p>
                                <a href="#" class="cta-btn-secondary announce-card-cta">
                                    View Document
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 1: REGISTERED PARTICIPANTS                             -->
        
        <section class="schools-grid flat">
            <div class="row align-items-stretch gy-5">
                <!-- LEFT: Title, description & download cards -->
                <div class="col-lg-6">
                    <div class="rp-content">
                        
                        <h2 class="rp-title">
                            Registered <span>Participants</span>
                        </h2>
                        <p class="rp-desc">
                            Please find attached the <strong>Group IDs</strong> assigned to each registered team. If your name appears more than once, only the latest registration will be considered. Stay updated, download your resources, and follow the submission guidelines carefully.
                        </p>

                        <!-- Resource Download Cards -->
                        <div class="resource-cards-list">
                            <!-- PDF Download Card -->
                            <a href="#" class="download-resource-card pdf-style" title="Download Group ID list PDF">
                                <div class="resource-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </div>
                                <div class="resource-details">
                                    <div class="resource-title">Group ID list</div>
                                    <div class="resource-meta">Click to download PDF document</div>
                                </div>
                                <div class="resource-action-icon">
                                    <i class="icon-arrow-right"></i>
                                </div>
                            </a>

                            <!-- Excel Download Card -->
                            <a href="#" class="download-resource-card excel-style" title="Download team members List Excel">
                                <div class="resource-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="9" y1="3" x2="9" y2="21"></line>
                                        <line x1="15" y1="3" x2="15" y2="21"></line>
                                        <line x1="3" y1="9" x2="21" y2="9"></line>
                                        <line x1="3" y1="15" x2="21" y2="15"></line>
                                    </svg>
                                </div>
                                <div class="resource-details">
                                    <div class="resource-title">Download team members List</div>
                                    <div class="resource-meta">Click to access Excel spreadsheet</div>
                                </div>
                                <div class="resource-action-icon">
                                    <i class="icon-arrow-right"></i>
                                </div>
                            </a>
                        </div>

                        <!-- Video Submission Portal Box -->
                        <div class="video-submission-box">
                            <div class="submission-meta">
                                <span class="submission-label">Video Submission Link</span>
                            </div>
                            <a href="https://forms.gle/CbJypXVq78mXZ2oc7" target="_blank" class="cta-btn-primary submission-btn w-100 justify-content-center">
                                Video submission link
                                <i class="icon-arrow-right"></i>
                            </a>
                            <p class="submission-help">
                                If you have any questions, feel free to reach out to us.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Image with floating badges -->
                <div class="col-lg-6">
                    <div class="rp-visual">
                        <div class="rp-image-wrap">
                            <img src="{{ asset('frontend/image/services-item/school_competition.jpg') }}" alt="SLIIT Robofest 2026 Registered Participants">

                            <!-- Bottom floating Important Alert badge -->
                            <div class="rp-image-alert-badge">
                                <div class="alert-badge-header">
                                    <span class="alert-icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                            <line x1="12" y1="9" x2="12" y2="13"></line>
                                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                        </svg>
                                    </span>
                                    <span class="alert-pill">Important Alert</span>
                                </div>
                                <div class="alert-badge-body">
                                    <p class="alert-text-line">
                                        Please follow the <strong>Technical Specifications</strong> carefully — submissions meeting all guidelines will be prioritized during evaluation.
                                    </p>
                                    <p class="alert-text-line deadline">
                                        Video submission deadline has been extended to <strong>20 August 2025</strong>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       

       
        <!-- SECTION 2: ROBOFEST 2026 SCHOOL CATEGORY ACCEPTED LIST         -->
       
        <section class="accepted-list-grid flat">
            <div class="row align-items-stretch gy-5">
                <!-- LEFT: Title, description & download cards -->
                <div class="col-lg-6">
                    <div class="rp-content">
                        
                        <h2 class="rp-title">
                            Accepted <span>List</span>
                        </h2>
                        <p class="rp-desc">
                            We are happy to announce that the following groups have successfully registered to the <strong>Robofest 2026</strong> competition. Each selected team has been assigned a unique <strong>Group ID</strong> for future submissions. Congratulations to all accepted teams — we look forward to seeing you on the competition floor.
                        </p>

                        <!-- Download Card for Accepted List -->
                        <div class="resource-cards-list">
                            <a href="#" class="download-resource-card pdf-style" title="Download School Category Accepted List">
                                <div class="resource-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </div>
                                <div class="resource-details">
                                    <div class="resource-title">Download Accepted List</div>
                                    <div class="resource-meta">Click to download the PDF document</div>
                                </div>
                                <div class="resource-action-icon">
                                    <i class="icon-arrow-right"></i>
                                </div>
                            </a>
                        </div>

                        <!-- Premium Download CTA -->
                        <div class="video-submission-box">
                            <div class="submission-meta">
                                <span class="submission-label">Official Accepted Teams List</span>
                            </div>
                            <a href="#" class="cta-btn-primary submission-btn w-100 justify-content-center">
                                Download Full List
                                <i class="icon-arrow-right"></i>
                            </a>
                            <p class="submission-help">
                                Reach out to us if you have any concerns about your registration status.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Image with floating badges -->
                <div class="col-lg-6">
                    <div class="rp-visual">
                        <div class="rp-image-wrap">
                            <img src="{{ asset('frontend/image/project-item/champion-school.jpg') }}" alt="SLIIT Robofest 2026 Accepted Teams">

                            <!-- Top-left floating badge -->
                            <div class="rp-image-badge">
                                <div class="big-number">100+</div>
                                <div class="label">Schools Selected</div>
                            </div>

                            <!-- Bottom floating Success Notice badge -->
                            <div class="rp-image-alert-badge success">
                                <div class="alert-badge-header">
                                    <span class="alert-icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </span>
                                    <span class="alert-pill">Selected Teams</span>
                                </div>
                                <div class="alert-badge-body">
                                    <p class="alert-text-line">
                                        Every accepted team has been assigned a unique <strong>Group ID</strong> — please use it for all future submissions and communications.
                                    </p>
                                    <p class="alert-text-line deadline">
                                        Stay tuned for the official <strong>final round briefing</strong> coming soon.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION 2: ACCEPTED LIST -->

        <!-- Past Winners Section (Dropdown / Collapsible System) -->
        <section class="past-winners-sec">
            <div class="section-header-custom text-center">
                <div class="section-tag-custom">
                    <i class="icon-quote"></i> Hall of Fame
                </div>
                <h2 class="section-title-custom">
                    Past <span>Winners</span>
                </h2>
            </div>

            <div class="winners-dropdown-wrap">
                
                <!-- Accordion Year: 2025 -->
                <div class="winner-year-accordion" id="accordion-2025">
                    <div class="accordion-trigger" onclick="toggleAccordion('2025')">
                        <div class="trigger-left">
                            <span class="accordion-year-badge">2025</span>
                            <span class="accordion-trigger-title">ROBOFEST 2025 Champions</span>
                        </div>
                        <i class="icon-angle-down accordion-icon"></i>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-content-inner">
                            <div class="winner-pods-grid">

                                <!-- 1st Place -->
                                <div class="winner-card rank-1">
                                    <div class="winner-card-image">
                                        <span class="winner-card-rank-pill">1st Place</span>
                                        <img src="{{ asset('frontend/image/project-item/champion-school.jpg') }}" alt="Team StormTech">
                                    </div>
                                    <div class="winner-card-body">
                                        <h4 class="winner-card-team">Team StormTech</h4>
                                        <p class="winner-card-school">Maliyadeva College, Kurunegala</p>
                                        <span class="winner-card-trophy">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                                <path d="M4 22h16"></path>
                                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                            </svg>
                                            Gold Trophy
                                        </span>
                                    </div>
                                </div>

                                <!-- 2nd Place -->
                                <div class="winner-card rank-2">
                                    <div class="winner-card-image">
                                        <span class="winner-card-rank-pill">2nd Place</span>
                                        <img src="{{ asset('frontend/image/services-item/school_competition.jpg') }}" alt="Team CyberMages">
                                    </div>
                                    <div class="winner-card-body">
                                        <h4 class="winner-card-team">Team CyberMages</h4>
                                        <p class="winner-card-school">Ananda College, Colombo</p>
                                        <span class="winner-card-trophy">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                                <path d="M4 22h16"></path>
                                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                            </svg>
                                            Silver Trophy
                                        </span>
                                    </div>
                                </div>

                                <!-- 3rd Place -->
                                <div class="winner-card rank-3">
                                    <div class="winner-card-image">
                                        <span class="winner-card-rank-pill">3rd Place</span>
                                        <img src="{{ asset('frontend/image/section/img-section-counting-1.jpg') }}" alt="Team Zenith">
                                    </div>
                                    <div class="winner-card-body">
                                        <h4 class="winner-card-team">Team Zenith</h4>
                                        <p class="winner-card-school">Royal College, Colombo</p>
                                        <span class="winner-card-trophy">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                                <path d="M4 22h16"></path>
                                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                            </svg>
                                            Bronze Trophy
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Year: 2024 -->
                <div class="winner-year-accordion" id="accordion-2024">
                    <div class="accordion-trigger" onclick="toggleAccordion('2024')">
                        <div class="trigger-left">
                            <span class="accordion-year-badge">2024</span>
                            <span class="accordion-trigger-title">ROBOFEST 2024 Champions</span>
                        </div>
                        <i class="icon-angle-down accordion-icon"></i>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-content-inner">
                            <div class="winner-pods-grid">

                                <!-- 1st Place -->
                                <div class="winner-card rank-1">
                                    <div class="winner-card-image">
                                        <span class="winner-card-rank-pill">1st Place</span>
                                        <img src="{{ asset('frontend/image/services-item/school_competition.jpg') }}" alt="Team RoboNalanda">
                                    </div>
                                    <div class="winner-card-body">
                                        <h4 class="winner-card-team">Team RoboNalanda</h4>
                                        <p class="winner-card-school">Nalanda College, Colombo</p>
                                        <span class="winner-card-trophy">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                                <path d="M4 22h16"></path>
                                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                            </svg>
                                            Gold Trophy
                                        </span>
                                    </div>
                                </div>

                                <!-- 2nd Place -->
                                <div class="winner-card rank-2">
                                    <div class="winner-card-image">
                                        <span class="winner-card-rank-pill">2nd Place</span>
                                        <img src="{{ asset('frontend/image/project-item/champion-school.jpg') }}" alt="Team ApexBuilders">
                                    </div>
                                    <div class="winner-card-body">
                                        <h4 class="winner-card-team">Team ApexBuilders</h4>
                                        <p class="winner-card-school">Trinity College, Kandy</p>
                                        <span class="winner-card-trophy">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                                <path d="M4 22h16"></path>
                                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                            </svg>
                                            Silver Trophy
                                        </span>
                                    </div>
                                </div>

                                <!-- 3rd Place -->
                                <div class="winner-card rank-3">
                                    <div class="winner-card-image">
                                        <span class="winner-card-rank-pill">3rd Place</span>
                                        <img src="{{ asset('frontend/image/section/img-section-counting-11.jpg') }}" alt="Team CircuitBreakers">
                                    </div>
                                    <div class="winner-card-body">
                                        <h4 class="winner-card-team">Team CircuitBreakers</h4>
                                        <p class="winner-card-school">St. Benedict's College, Colombo</p>
                                        <span class="winner-card-trophy">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                                <path d="M4 22h16"></path>
                                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                            </svg>
                                            Bronze Trophy
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Year: 2023 -->
                <div class="winner-year-accordion" id="accordion-2023">
                    <div class="accordion-trigger" onclick="toggleAccordion('2023')">
                        <div class="trigger-left">
                            <span class="accordion-year-badge">2023</span>
                            <span class="accordion-trigger-title">ROBOFEST 2023 Champions</span>
                        </div>
                        <i class="icon-angle-down accordion-icon"></i>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-content-inner">
                            <div class="winner-pods-grid">

                                <!-- 1st Place -->
                                <div class="winner-card rank-1">
                                    <div class="winner-card-image">
                                        <span class="winner-card-rank-pill">1st Place</span>
                                        <img src="{{ asset('frontend/image/section/img-section-counting-1.jpg') }}" alt="Team GearHeads">
                                    </div>
                                    <div class="winner-card-body">
                                        <h4 class="winner-card-team">Team GearHeads</h4>
                                        <p class="winner-card-school">Richmond College, Galle</p>
                                        <span class="winner-card-trophy">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                                <path d="M4 22h16"></path>
                                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                            </svg>
                                            Gold Trophy
                                        </span>
                                    </div>
                                </div>

                                <!-- 2nd Place -->
                                <div class="winner-card rank-2">
                                    <div class="winner-card-image">
                                        <span class="winner-card-rank-pill">2nd Place</span>
                                        <img src="{{ asset('frontend/image/section/img-section-counting-11.jpg') }}" alt="Team Pulse">
                                    </div>
                                    <div class="winner-card-body">
                                        <h4 class="winner-card-team">Team Pulse</h4>
                                        <p class="winner-card-school">D.S. Senanayake College, Colombo</p>
                                        <span class="winner-card-trophy">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                                <path d="M4 22h16"></path>
                                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                            </svg>
                                            Silver Trophy
                                        </span>
                                    </div>
                                </div>

                                <!-- 3rd Place -->
                                <div class="winner-card rank-3">
                                    <div class="winner-card-image">
                                        <span class="winner-card-rank-pill">3rd Place</span>
                                        <img src="{{ asset('frontend/image/project-item/champion-school.jpg') }}" alt="Team Spark">
                                    </div>
                                    <div class="winner-card-body">
                                        <h4 class="winner-card-team">Team Spark</h4>
                                        <p class="winner-card-school">Mahinda College, Galle</p>
                                        <span class="winner-card-trophy">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                                <path d="M4 22h16"></path>
                                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                            </svg>
                                            Bronze Trophy
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Image Gallery Section -->
        <section class="gallery-sec">
            <div class="glow-accent" style="bottom: -200px; right: -200px;"></div>
            <div class="section-header-custom text-center">
                <div class="section-tag-custom">
                    <i class="icon-camera"></i> Media Gallery
                </div>
                <h2 class="section-title-custom">
                    Event <span>Memories</span>
                </h2>
            </div>

            <div class="gallery-grid">

                <div class="gallery-card is-tall">
                    <img src="{{ asset('frontend/image/services-item/school_competition.jpg') }}" alt="School Competitors Working">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-title">Intense Coding Session</div>
                        <div class="gallery-card-tag">Maze-solver debugging</div>
                    </div>
                </div>

                <div class="gallery-card is-wide">
                    <img src="{{ asset('frontend/image/project-item/champion-school.jpg') }}" alt="School Competitors Award">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-title">Champions of 2025</div>
                        <div class="gallery-card-tag">Awards Ceremony</div>
                    </div>
                </div>

                <div class="gallery-card is-portrait">
                    <img src="{{ asset('frontend/image/services-item/SLIIT-robofest-drone.jpg') }}" alt="School Competitors Drone Testing">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-title">Pre-Flight Adjustments</div>
                        <div class="gallery-card-tag">Drone testing zone</div>
                    </div>
                </div>

                <div class="gallery-card is-square">
                    <img src="{{ asset('frontend/image/project-item/Champion-UNI.jpg') }}" alt="Audience Cheer">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-title">Proud Winners Moment</div>
                        <div class="gallery-card-tag">Trophy presentation</div>
                    </div>
                </div>

                <div class="gallery-card is-tall">
                    <img src="{{ asset('frontend/image/section/img-section-counting-1.jpg') }}" alt="Mentors Guiding students">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-title">Mentor Consultation</div>
                        <div class="gallery-card-tag">STEM workshops</div>
                    </div>
                </div>

                <div class="gallery-card is-wide">
                    <img src="{{ asset('frontend/image/services-item/university_competition.jpg') }}" alt="Exhibition stands">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-title">Robotics Showcase</div>
                        <div class="gallery-card-tag">Robofest exhibition</div>
                    </div>
                </div>

                <div class="gallery-card is-landscape">
                    <img src="{{ asset('frontend/image/competition-banner/SLIIT-Robofest-event-register-banner.jpg') }}" alt="Robofest Opening Ceremony">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-title">Grand Opening Ceremony</div>
                        <div class="gallery-card-tag">Robofest 2025 kickoff</div>
                    </div>
                </div>

                <div class="gallery-card is-portrait">
                    <img src="{{ asset('frontend/image/section/img-section-counting-11.jpg') }}" alt="Team Briefing Session">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-title">Strategy Briefing</div>
                        <div class="gallery-card-tag">Pre-round planning</div>
                    </div>
                </div>

                <div class="gallery-card is-square">
                    <img src="{{ asset('frontend/image/services-item/school_competition.jpg') }}" alt="Maze Challenge">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-title">Maze Challenge Live</div>
                        <div class="gallery-card-tag">Arena action</div>
                    </div>
                </div>

                <div class="gallery-card is-wide">
                    <img src="{{ asset('frontend/image/project-item/champion-school.jpg') }}" alt="Group Champions Photo">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-title">Winners' Group Photo</div>
                        <div class="gallery-card-tag">Hall of fame moment</div>
                    </div>
                </div>

            </div>
        </section>

    </div>
</div>

<script>
    // Accordion handler for past winners
    function toggleAccordion(year) {
        var accordion = document.getElementById('accordion-' + year);
        var content = accordion.querySelector('.accordion-content');
        var isActive = accordion.classList.contains('active');

        // Close all accordions first
        document.querySelectorAll('.winner-year-accordion').forEach(function(item) {
            item.classList.remove('active');
            item.querySelector('.accordion-content').style.maxHeight = null;
        });

        // Toggle selected accordion
        if (!isActive) {
            accordion.classList.add('active');
            content.style.maxHeight = content.scrollHeight + 'px';
        }
    }

    // Open the latest year (2025) by default
    document.addEventListener("DOMContentLoaded", function() {
        toggleAccordion('2025');
    });
</script>
@endsection