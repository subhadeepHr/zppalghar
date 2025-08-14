<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback | Zilla Parishad Palghar | India</title>
    <?php include_once "include/header_script.php"; ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        moveBackground: {
                            "0%": {
                                backgroundPosition: "0 0"
                            },
                            "100%": {
                                backgroundPosition: "40px 40px"
                            },
                        },
                        noiseMove: {
                            "0%": {
                                transform: "translate(0,0)"
                            },
                            "25%": {
                                transform: "translate(-2px,1px)"
                            },
                            "50%": {
                                transform: "translate(1px,-1px)"
                            },
                            "75%": {
                                transform: "translate(-1px,2px)"
                            },
                            "100%": {
                                transform: "translate(0,0)"
                            },
                        },
                        distortionMove: {
                            "0%": {
                                transform: "translateX(-100%)"
                            },
                            "100%": {
                                transform: "translateX(100%)"
                            },
                        }
                    },
                    animation: {
                        moveBackground: "moveBackground 10s linear infinite",
                        noiseMove: "noiseMove 8s linear infinite",
                        distortionMove: "distortionMove 6s linear infinite",
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-[#f6f3ef] font-sans">
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/header_img.php"; ?>
    <div class="max-w-7xl mx-auto">
        <div class="m-1 p-1">

            <h1 class="text-3xl font-semibold mb-4">Feedback</h1>

            <div class="bg-[#eeeeee] p-4 rounded-lg shadow border border-gray-200">
                <div class="bg-white max-w-3xl mx-auto p-6 rounded-lg shadow">
                    <form id="feedbackForm" action="#" method="post" class="space-y-4">

                        <div>
                            <label class="block text-[#363636] font-semibold text-md">Your Name (required)</label>
                            <input type="text" name="name" required
                                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 transition">
                            <div class="text-red-500 text-xs mt-1 hidden error-message">Name is a required field</div>
                        </div>

                        <div>
                            <label class="block text-[#363636] font-semibold text-md">Your Email (required)</label>
                            <input type="email" name="email" required
                                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 transition">
                            <div class="text-red-500 text-xs mt-1 hidden error-message">Email is a required field</div>
                        </div>

                        <div>
                            <label class="block text-[#363636] font-semibold text-md">Subject</label>
                            <input type="text" name="subject"
                                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 transition">
                        </div>

                        <div>
                            <label class="block text-[#363636] font-semibold text-md">Your Message (required)</label>
                            <textarea name="message" required
                                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 h-24 transition"></textarea>
                            <div class="text-red-500 text-xs mt-1 hidden error-message">Message is a required field</div>
                        </div>
                    </form>

                    <div class="bg-[#A9A9A9] border-2 border-gray-300 p-2 w-full max-w-sm shadow-lg">
                        <div
                            class="relative bg-white border-2 border-gray-500 h-20 mb-4 flex items-center justify-center overflow-hidden rounded">
                            <div id="captchaBackground"
                                class="absolute inset-0 opacity-30 bg-[length:20px_20px] animate-moveBackground z-10"></div>

                            <div class="absolute inset-0 opacity-40 animate-noiseMove z-10" style="background-image:
          radial-gradient(circle at 20% 30%, black 1px, transparent 1px),
          radial-gradient(circle at 80% 70%, black 1px, transparent 1px),
          radial-gradient(circle at 40% 80%, black 1px, transparent 1px),
          radial-gradient(circle at 60% 20%, black 1px, transparent 1px);
          background-size: 15px 15px, 12px 12px, 18px 18px, 14px 14px;">
                            </div>

                            <div
                                class="absolute top-[20%] w-full h-[2px] bg-gradient-to-r from-transparent via-gray-600 to-transparent animate-distortionMove z-20">
                            </div>
                            <div
                                class="absolute top-[60%] w-full h-[2px] bg-gradient-to-r from-transparent via-gray-600 to-transparent animate-distortionMove [animation-delay:2s] z-20">
                            </div>

                            <div id="captchaText"
                                class="relative z-30 text-[28px] font-bold text-gray-800 tracking-[8px] skew-x-[-5deg] rotate-[-2deg] select-none font-mono drop-shadow-md">
                                h0X0
                            </div>

                            <div class="absolute right-2 top-1/2 -translate-y-1/2 flex flex-col gap-2 z-40">
                                <button id="audioBtn" title="Audio CAPTCHA"
                                    class="w-8 h-8 bg-white border border-gray-400 rounded flex items-center justify-center text-lg hover:bg-gray-100 hover:scale-105 transition">
                                    🔊
                                </button>
                                <button id="refreshBtn" title="Refresh CAPTCHA"
                                    class="w-8 h-8 bg-white border border-gray-400 rounded flex items-center justify-center text-lg hover:bg-gray-100 hover:scale-105 transition">
                                    🔄
                                </button>
                            </div>
                        </div>

                        <label class="text-sm text-gray-600 font-medium mb-2 block">Enter Captcha Code</label>
                        <input type="text"
                            class="w-full p-3 border-2 border-gray-300 rounded focus:outline-none focus:border-green-500 transition"
                            id="captchaInput" placeholder="Enter Code" maxlength="6">
                        <div id="message" class="mt-3 p-2 rounded text-sm text-center opacity-0 transition"></div>
                    </div>

                    <button
                        class="mt-3 bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded transition hover:-translate-y-0.5 hover:shadow-md active:translate-y-0"
                        id="sendBtn">Send</button>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "include/footer.php"; ?>
    <?php include_once "include/footer_script.php"; ?>

    <script>
        class CaptchaSystem {
            constructor() {
                this.currentCaptcha = '';
                this.backgroundPatterns = [
                    'repeating-linear-gradient(45deg, #f0f0f0 0px, #f0f0f0 2px, #e0e0e0 2px, #e0e0e0 4px)',
                    'repeating-conic-gradient(#f0f0f0 0deg 90deg, #e0e0e0 90deg 180deg)',
                    'radial-gradient(circle at 50% 50%, #f0f0f0 1px, #e0e0e0 1px)',
                    'repeating-linear-gradient(90deg, #f0f0f0 0px, #e0e0e0 10px, #f0f0f0 20px)',
                    'conic-gradient(from 45deg, #f0f0f0, #e0e0e0, #f0f0f0)'
                ];
                this.init();
            }
            init() {
                this.generateCaptcha();
                this.bindEvents();
                this.startBackgroundAnimation();
            }
            generateCaptcha() {
                const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789';
                let captcha = '';
                for (let i = 0; i < 5; i++) captcha += chars.charAt(Math.floor(Math.random() * chars.length));
                this.currentCaptcha = captcha;
                this.displayCaptcha();
            }
            displayCaptcha() {
                const captchaText = document.getElementById('captchaText');
                captchaText.textContent = this.currentCaptcha;
                const randomRotation = (Math.random() - 0.5) * 10;
                const randomSkew = (Math.random() - 0.5) * 20;
                const randomScale = 0.9 + Math.random() * 0.2;
                captchaText.style.transform = `rotate(${randomRotation}deg) skew(${randomSkew}deg) scale(${randomScale})`;
                const colors = ['#333', '#444', '#222', '#555', '#111'];
                captchaText.style.color = colors[Math.floor(Math.random() * colors.length)];
            }
            startBackgroundAnimation() {
                const background = document.getElementById('captchaBackground');
                let patternIndex = 0;
                const changeBackground = () => {
                    background.style.backgroundImage = this.backgroundPatterns[patternIndex];
                    patternIndex = (patternIndex + 1) % this.backgroundPatterns.length;
                };
                changeBackground();
                setInterval(changeBackground, 3000);
            }
            bindEvents() {
                const refreshBtn = document.getElementById('refreshBtn');
                const audioBtn = document.getElementById('audioBtn');
                const sendBtn = document.getElementById('sendBtn');
                const input = document.getElementById('captchaInput');
                refreshBtn.addEventListener('click', e => {
                    e.preventDefault();
                    this.generateCaptcha();
                    this.clearMessage();
                    input.className = "w-full p-3 border-2 border-gray-300 rounded focus:outline-none focus:border-green-500 transition";
                    input.value = '';
                });
                audioBtn.addEventListener('click', e => {
                    e.preventDefault();
                    this.playAudio();
                });
                sendBtn.addEventListener('click', e => {
                    e.preventDefault();
                    this.validateCaptcha();
                });
                input.addEventListener('keypress', e => {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        this.validateCaptcha();
                    }
                });
                input.addEventListener('input', () => {
                    this.clearMessage();
                    input.className = "w-full p-3 border-2 border-gray-300 rounded focus:outline-none focus:border-green-500 transition";
                });
            }
            validateCaptcha() {
                const input = document.getElementById('captchaInput');
                const userInput = input.value.trim();
                if (!userInput) {
                    this.showMessage('Please enter the CAPTCHA code', 'error');
                    return;
                }
                if (userInput.toLowerCase() === this.currentCaptcha.toLowerCase()) {
                    input.className = "w-full p-3 border-2 border-green-500 bg-green-50 rounded focus:outline-none transition";
                    this.showMessage('CAPTCHA verified successfully! ✓', 'success');
                } else {
                    input.className = "w-full p-3 border-2 border-red-500 bg-red-50 rounded focus:outline-none transition";
                    this.showMessage('Incorrect CAPTCHA. Please try again.', 'error');
                    setTimeout(() => {
                        this.generateCaptcha();
                        input.value = '';
                        input.className = "w-full p-3 border-2 border-gray-300 rounded focus:outline-none focus:border-green-500 transition";
                    }, 2000);
                }
            }
            playAudio() {
                if ('speechSynthesis' in window) {
                    const utterance = new SpeechSynthesisUtterance();
                    utterance.text = this.currentCaptcha.split('').join(' ');
                    utterance.rate = 0.7;
                    utterance.pitch = 0.8;
                    speechSynthesis.speak(utterance);
                } else {
                    this.showMessage('Audio not supported in this browser', 'error');
                }
            }
            showMessage(text, type) {
                const message = document.getElementById('message');
                message.textContent = text;
                message.className = `mt-3 p-2 rounded text-sm text-center opacity-100 transition ${type === 'success'
                    ? 'bg-green-100 text-green-700 border border-green-300'
                    : 'bg-red-100 text-red-700 border border-red-300'}`;
            }
            clearMessage() {
                const message = document.getElementById('message');
                message.className = "mt-3 p-2 rounded text-sm text-center opacity-0 transition";
            }
        }
        document.addEventListener('DOMContentLoaded', () => {
            new CaptchaSystem();
        });
    </script>

</body>

</html>