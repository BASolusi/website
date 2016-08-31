<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => '英語',
        'download'                        => 'ダウンロード',
        'documentation'                   => 'ドキュメント',
        'forum'                           => 'フォーラム',
        'blog'                            => 'ブログ',
        'support'                         => 'サポート',
        'donate'                          => '寄付する',
        'store'                           => 'ストア',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong> は、<a href=':1:'>ハイパフォーマンス</a> で少ないリソース消費のC拡張として実装されたWebフレームワークを提供します",
        'the_fastest_php_framework'       => '最速<br />PHP フレームワーク',
        'try_online'                      => 'オンラインで試す',
        'see_screencasts'                 => 'スクリーンキャストを見る',
        'everything_you_need_upper'       => 'あなたが必要とするすべて',
        'full_mvc_applications'           => "フル <a href=':1:'>MVC</a> アプリケーション",
        'single_module'                   => 'シングルモジュール',
        'multi_module'                    => 'マルチモジュール',
        'micro_applications'              => 'マイクロアプリケーション',
        'orm'                             => 'ORM',
        'transactions'                    => 'トランザクション',
        'behaviors'                       => 'ビヘイビア',
        'relations'                       => 'リレーション',
        'phql'                            => 'PHQL',
        'events'                          => 'イベント',
        'validations'                     => 'バリデーション',
        'hydration'                       => 'ハイドレーション',
        'logging'                         => 'ロギング',
        'profiling'                       => 'プロファイリング',
        'sharding'                        => 'シャーディング',
        'odm_for_mongo'                   => 'ODM for Mongo',
        'template_engine_volt'            => 'テンプレートエンジン (Volt)',
        'di_ioc'                          => '依存性の注入/制御の反転',
        'events_management'               => 'イベント管理',
        'encryption'                      => '暗号化',
        'http_request'                    => 'HTTP リクエスト',
        'http_response'                   => 'レスポンス',
        'http_cookies'                    => 'Cookies',
        'escaping'                        => 'エスケープ',
        'filtering'                       => 'フィルタリング',
        'forms_builder'                   => 'フォーム ビルダー',
        'forms_validation'                => 'バリデーション',
        'flash_messages'                  => 'フラッシュ メッセージ',
        'cache'                           => 'キャッシュ',
        'pagination'                      => 'パジネーション',
        'annotations'                     => 'アノテーション',
        'security'                        => 'セキュリティ',
        'translations'                    => '翻訳',
        'assets_management'               => 'アセット マネジメント',
        'universal_auto_loader'           => 'ユニバーサル Auto-Loader',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'PHALCON フォーラム',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => '私たちのEMAIL',
        'services_upper'                  => 'サービス',
        'consulting_upper'                => 'コンサルティング',
        'requirements_analysis'           => '要求分析',
        'implementation'                  => '実装',
        'ongoing_support'                 => '継続的支援',
        'read_more'                       => '続きを読む',
        'hosting_upper'                   => 'ホスティング',
        'phalcon_can_be_installed'        => 'Phalcon をインストールできます',
        'main_upper'                      => 'メイン',
        'consulting'                      => 'コンサルティング',
        'hosting'                         => 'ホスティング',
        'support_upper'                   => 'サポート',
        'forum_community'                 => 'フォーラム / コミュニティ',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => '課題 トラッカー',
        'get_involved_upper'              => 'GET INVOLVED',
        'team'                            => 'チーム',
        'about'                           => 'About',
        'roadmap'                         => 'ロードマップ',
        'donate_to_phalcon'               => 'Phalcon へ寄付する:',
        'or'                              => 'または',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google Plus',
        'vimeo'                           => 'Vimeo',
        'amazing_contributors'            => '素晴らしい貢献者たち',

        'download_phalcon'                => 'Phalcon をダウンロード',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLLs',
        'download_developer_tools'        => 'デベロッパーツール',
        'download_ide_stubs'              => 'IDE stubs',
        'download_ubuntu'                 => 'To install Phalcon on Ubuntu or Debian you need to follow these steps:',
        'download_ubuntu_or_debian'       => 'Ubuntu or Debian',
        'download_ubuntu_1'               => 'If you are missing apt-add-repository run the following command:',
        'download_note'                   => 'Phalcon は、C言語の拡張です、あなたのプラットフォーム用のバイナリをダウンロードしたり、ソースコードからコンパイルする必要があります。',
        'download_compilation'            => 'コンパイル',
        'download_compilation_1'          => 'Linux 上で、簡単にコンパイルして、ソースコードからの拡張機能をインストールすることができます。',
        'download_requirements'           => '必要条件',
        'download_requirements_1'         => '事前にインストールが必要なパッケージ:',
        'download_requirements_2'         => 'PHP 5.x の開発環境',
        'download_requirements_3'         => 'GCC コンパイラ',
        'download_compilation_11'         => '1. Cソースから拡張機能を作成するには、次の手順に従います :',
        'download_compilation_12'         => '2. php.ini へ拡張を追加する:',
        'download_compilation_13'         => '3. 最後に、 Webサーバを再起動',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "Arch Linux のための PKGBUILD は <a href=':1:'>ここ</a> にあります",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "利用可能なパッケージ <a href=':1:'>ここ</a> にあります (thanks to <a href=':2:'>Mariusz Łączak</a>)",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'port はFreeBSDのために利用可能です。それをインストールするには、これらのいくつかのコマンドが必要:',
        'download_dependencies'           => '依存関係',
        'download_dependencies_1'         => 'Phalcon は、他の拡張機能へのバイナリのリンクをしていませんが、機能性を提供するためにいくつかを使用します。使用される拡張は:',
        'download_dependencies_2'         => '上記のすべての拡張機能を、Phalconがインストールされているシステムに存在する必要はありません。あなたは、あなたが必要としているものをインストールすることができます。 MySQLデータベースを使用している場合たとえば、あなたは、Oracle 、 SQLiteは、 PostgreSQLとMongoを無視してPDOおよびPDO / MySQLを読み込むことができます。',
        'download_need_help'              => 'ヘルプが必要ですか？',
        'download_need_help_1'            => "サポートを得るために私たちの <a href=':1:'>サポートページ</a> を見てください。私たちはあなたを助けるために全力を尽くします。",

        'download_windows_note'           => 'Phalconの完全な機能セットを活用するために、私たちのDLLに対応するPHPの最新バージョンを使用することを推奨します。',
        'download_windows_stable'         => '安定/マスター バージョン',
        'download_windows_installation'   => 'インストール',
        'download_windows_installation_1' => "Windows上でPhalconを使用するには、DLLライブラリをダウンロードすることができます。 php.ini の末尾に追加し、拡張を読み込むためにウェブサーバを再起動します。 <a href=':1:'>さらに</a>。",
        'download_windows_guides'         => '関連ガイド',
        'download_windows_guides_xampp'   => 'XAMPP にインストール',
        'download_windows_guides_wamp'    => 'WAMP にインストール',
        'download_windows_alpha'          => 'アルファ/ベータ 版',
        'download_source_code'            => "ソースコード: <a href=':1:' target='_download' title='GitHub レポジトリ'>github</a>",
        'download_source_code_switch'     => "ソースコード (関連するブランチに切り替えてください): <a href=':1:' target='_download' title='GitHub レポジトリ'>github</a>",
        'download_no_alpha_beta'          => '現時点で、利用可能な アルファ/ベータ版 はありません。',
        'download_windows_older'          => '古いバージョン',

        'download_devtools_1'             => 'これらのツールは、スケルトンコードを生成する便利なスクリプトのコレクションです。アプリケーションのコアコンポーネントは、あなたが簡単にPhalconを使用してアプリケーションを開発できるように、簡単なコマンドを使って生成することができます。',
        'download_devtools_docs'          => "ドキュメント: <a href=':1:'>Phalcon デベロッパーツール</a>",
        'download_devtools_composer'      => 'Composer 経由のインストール',
        'download_devtools_composer_1'    => '共通の場所、または、あなたのプロジェクト内に composer をインストール',
        'download_devtools_composer_2'    => 'composer.json は以下のように作成します:',
        'download_devtools_composer_3'    => 'composer インストールを実行:',
        'download_devtools_composer_4'    => 'phalcon.phpスクリプトへのシンボリックリンクを作成します:',
        'download_devtools_download'      => '<a href=":1:">Github</a> から、開発ツールが含まれているクロスプラットフォームのパッケージをダウンロードしたり、クローンを作成することができます',

        'download_vagrant'                => 'Vagrant',
        'download_vagrant_boxes'          => 'Vagrant Box',
        'download_vagrant_1'              => "<a href=':1:'>Vagrant</a> は、軽量で、再現性があり、ポータブルな開発環境を作成・設定できる素晴らしいツールです。",
        'download_vagrant_2'              => "以下の box には設定済みの開発環境が含まれています。これらを使用することで、Phalconの動作を試したり、開発を行ったりすることができます。",
        'download_box_1'                  => "Box 1",
        'download_box_2'                  => "Box 2",
        'download_box_user_pass'          => "MySQL ユーザー： :1: 　パスワード： :2:",
        'download_box_doc_root'           => "ドキュメントルート: :1:",
        'download_examples'               => "インストール済みのサンプルアプリ",
        'download_examples_1'             => "次のサンプルアプリは、各 vagrant box にインストール済みです。",

        'consulting_header'               => "We have partnered with <a href=':1:'>LEZGRO</a>, a company that specializes in web and mobile application development and is very adept in delivering Phalcon powered applications to their clientele.",
        'consulting_lezgro_1'             => "<a href=':1:'>LEZGRO</a> congratulates you with the your choice of making Phalcon central in your technology stack!",
        'consulting_lezgro_2'             => "Since our company first saw the light of the day in 2003, we have tried various technologies and approaches in software development.",
        'consulting_lezgro_3'             => "Product managers, CTOs, and non-technical founders involve <a href=':1:'>LEZGRO</a> to build products that stand out, quickly and with a high quality.",
        'consulting_lezgro_4'             => "Now that we have acquired positive experience with Phalcon, we are open to advise you on making the decision to develop on Phalcon, and help you bring your Phalcon-based product to market.",
        'consulting_lezgro_5'             => "Contact LEZGRO through their <a href=':1:'>website</a>, where you can also see samples and testimonials of their work.",

        'consulting_mctekk_header'        => 'MCTekK has already delivered various high end Phalcon projects, with their main strengths being web and mobile development.',
        'consulting_mctekk_1'             => 'MCTekK jumped on the Phalcon wagon since day one. From its conception we saw the great advantages that Phalcon was offering and could offer in the future.',
        'consulting_mctekk_2'             => 'We have ample experience with Phalcon and have developed a myriad of project with it as the core. We are here to advise you on anything you need concerning Phalcon to help you improve your readiness, quickness and quality.',
        'consulting_mctekk_3'             => 'Contact us thourgh our <a href=":1:">website</a>, where you can take a look at the projects we have been involved in.',

        'requirements_analysis_1'         => '開発者が直面している多くのプロジェクトが適切に定義された要件を持っていないという事実が最大の問題の一つです。そのため、それぞれのクライアントが望んでいることは、開発者が理解しているものとは全く異なるものを提供してしまう。',
        'requirements_analysis_2'         => '私たちはクライアントと協議し、開発者のための正確な仕様に自分のビジョンを翻訳し、要件の分析サービスを提供することができます。',
        'implementation_1'                => 'アプリケーションを開発するために私たちを雇いたい場合、我々はそうするよりも幸せになる。最新技術を使用して、我々は完全なテストとドキュメントを、あなたのタスクやプロジェクトのために堅牢なソリューションを提供することができます。',
        'ongoing_support_1'               => '継続的なサポート契約に興味を持っているお客様のために、我々は継続的に彼らのプロジェクトのサポートを提供することができます。お客様は時間あたり50 USDでサポート（最小2時間）の時間を購入することができます。',
        'ongoing_support_2'               => 'サポート時間に有効期限はありませんし、必要なときにいつでも使用することができます。継続的な支援スキームを使用したいお客様のために、私たちはより良いニーズに合う柔軟なプランを提供します。',
        'sponsors'                        => 'スポンサー',
        'sponsors_1'                      => '我々の仕事やPhalconのさらなる発展を後援したい人のために、我々は、任意の予算に収まるように、様々なスポンサーシップオプションを提供しています。',
        'sponsors_2'                      => '加えて、カスタマーは複雑さ、または流行のために、通常は多くの時間がかかるものが実装されることを要求するかもしれません。
私達はそのような要求に通常価格で確実に対応することが出来ます。',
        'contact'                         => 'コンタクト',
        'contact_1'                       => "あなたの要望を検討するために、お気軽に<a href=':1:'>お問い合わせ</a>ください。そして、私たちは、あなたのニーズとご予算に合わせた解決策をご提案いたします。 プロジェクトの規模が大きくても小さくても構いません。",

        'phalcon_team'                    => 'Phalcon チーム',
        'team_andres_1'                   => 'Andres は、数々のオープンソースプロジェクトでよく知られています。過去9年間にわたって、彼はweb開発に携わり、PHPのフレームワークを設計・リリースすることに情熱を注いできました。',
        'team_andres_2'                   => "A TR35 winner, Andres' main drive is to always choose and implement or use the right tool for the job, mostly focused on performance. Therefore in 2011 a new idea was in the works; to create a new kind of framework for PHP developers, one that focuses on usability, features and mostly performance.",
        'team_andres_3'                   => 'この新しい革新的なアプローチを通じて、Phalcon が生まれました。パフォーマンスを最大化し、リソースの使用率を低く保ちながら、開発者に豊富な機能を提供することができ、C言語で書かれたPHPフレームワーク。',
        'team_andres_4'                   => 'Andres は、Phalcon とそのインスピレーションのコア開発者の一人です。',
        'team_nikos_1'                    => 'Nikos は、 20年以上にわたってIT業界にいます。彼は2000年にPHPの世界に導かれ、それ以来、個人的なプロジェクトまた、彼の雇用者のための同様のプロジェクトで PHP を使用しています。',
        'team_nikos_2'                    => '彼は、新しい技術や既存のアプリケーションとそれらを統合するため、彼らが提供するメリットを享受するための方法を発見して愛している。',
        'team_nikos_3'                    => '彼はテスト駆動開発 (TDD) の熱心な支持者で、常にコードの完全なカバレッジ得ることに挑戦しています。',
        'team_nikos_4'                    => "Nikos' continuing interest in new and innovative technologies breaking out of the norm introduced him to Phalcon. He joined the core team and his tasks mainly involve coordination of NFRs and bug fixes, help with tests, documentation and the incubator. Nikos is also responsible for maintaining the Windows DLLs for the project and offers support whenever possible.",
        'team_nikolay_1'                  => 'Nikolay は、 10年以上、Webアプリケーションを開発してきました。彼は、高いパフォーマンスと同様、複雑なWebサイトや設計に携わってきました。',
        'team_nikolay_2'                  => 'Nikolay は、要件が許す時にそれらを利用して、長い時間のためのオープンソースプロジェクトに取り組んできました。彼は個人的な時間を使用して、アーキテクチャの変更や提案だけでなく、性能そのものを提供し、フォークしたプロジェクトで、地域社会にお返しを始めました。彼は、コミュニティからのフィードバックを受け取って、オープンソースCMSプロジェクトの改善に尽力してきました。',
        'team_nikolay_3'                  => 'His continuous involvement with open source projects has helped him advance his technical knowledge while abiding by the give back to the community mentality.',
        'team_nikolay_4'                  => 'Nikolay は、Webアプリケーションのパフォーマンスを最大化するための熱心なサポーターです。彼は Phalcon 導入後、彼はプロジェクトを追求し、使用することを決めた、そのためのエバンジェリストになることを決めた。彼は、ロシア語を話す開発者のために、リソースを提供し、ロシアのコミュニティにために努力をしています。',
        'team_nikolay_5'                  => "彼の貢献: ロシアの主なウェブサイトのミラー (<a href=':1:'>http://www.Phalcon.ru</a>), ロシアのドキュメントリポジトリのミラー (<a href=':2:'>http://docs.Phalcon.ru</a>), ソーシャルネットワーク Vkontakte 内のグループで、現在進行中の変化と英語のドキュメントの修正 (<a href=':3:'>http://vk.com/Phalcon</a>).",

        'get_involved'                    => '仲間に加わろう',
        'about_description_1'             => "Amazing projects need amazing hands. We might not know you just yet, but we think you'd be a great fit for building a better web. Together, we're ready to change the world! Here at Phalcon, we’re building a new generation framework for PHP; we want to give you an amazing performance while helping you develop in an easy and fun way.",
        'about_description_2'             => "We hope that you enjoy Phalcon as much as we do. We always welcome your collaboration and help! <strong>You don't have to be a C developer to help Phalcon!</strong> There are many other areas that you can contribute:",
        'about_translations_1'            => "We are trying to reach as many developers as possible, breaking down the language barriers. We are using <a href=':1:'>:2:</a>, to handle all the words or sentences that need to be translated for this site. The project repository is located <a href=':3:'>here</a> and below you can see the current status of our translation effort.",
        'documentation_upper'             => 'ドキュメント',
        'about_documentation_1'           => "The repository of this website is available on <a href=':1:'>github</a>. We are using <a href=':2:'>readthedocs</a> to manage our documentation.<br /><br />We always appreciate corrections, additions and enhancements in our documentation, so all you have to do is clone the repository and issue a pull request!<br /><br />If you can help non English speaking developers by translating some of the content to another language, that would be great!",
        'screencasts'                     => 'スクリーンキャスト',
        'about_screencasts_1'             => "We all love screencasts. If you have some extra time and want to support the community with some nice videos teaching any of the framework's features, it's very welcome. Check out our <a href=':1:'>Vimeo Channel</a> as a guide.",
        'tests'                           => 'テスト',
        'about_tests_1'                   => "No software is free of bugs. If you find any, please do not hesitate to tell us. We have a testsuite with more than <a href=':1:'>8000</a> tests. However, unit-tests are never enough. Help us improve our testsuite by adding more tests or improve the current ones. Every added test makes the framework more stable.",
        'sample_applications'             => 'サンプル アプリケーション',
        'about_sample_apps_1'             => 'Big examples help others to better understand how big things can be created with Phalcon. Feel free to share repositories to sample applications helping others with their work and allow others to give you feedback about your work too!',
        'evangelism'                      => '伝導',
        'about_evangelism_1'              => "There are a lot of people who still don’t know that Phalcon exists or that it really works. We are certain that many developers will benefit from hearing what Phalcon is all about and how it can help them. If you know of any PHP events/meetings and you wish to give a talk about the project, you have our full support. Who wouldn't want to know about the tool that is revolutionizing PHP development?",
        'share_your_experiences'          => 'あなたの経験を共有',
        'about_share_experiences_1'       => "Don’t be shy, feel free to share the ways through which Phalcon was useful to you with the community. If Phalcon is a success case for you, let us share that with the community. Also, discuss what components needed extra work, what you could do easier, what benefits you got by using Phalcon. Although not everything can be implemented immediately, your input on new feature requests can greatly help us shape the future of the project. Your feedback helps us all.",
        'about_blog_1'                    => "If you like writing, remember that <a href=':1:'>our blog</a> is open to post tutorials created by you. If you have a blog of your own and have written something about Phalcon, we can also publish in our social network pages so as to achieve maximum visibility. If your blog post is in a language other than English, we want to share it and potentially translate it if possible. If you know about blogs related to PHP that are interested in presenting the project to its audience please let us know.",
        'donations_sponsoring'            => '寄付/スポンサー',
        'about_sponsoring_1'              => "We’re a tiny but effective core team of developers working our tails off. We try to spend as much time as possible on the project. All our passion for this project makes us want to be better every day. Phalcon is open-sourced software and volunteer efforts are needed for its constant evolution. You can help us keep the development active by donating to the project or sponsoring the development. More time and resources dedicated to the project means more activity, more improvement, better support, more amazing features, etc.",
        'social_networks'                 => 'ソーシャルネットワーク',
        'about_social_networks_1'         => "Phalcon is evolving on a daily basis, through our desire to make it better. Social networks are part of our lives now, and we all interact with others through them. Sharing your Phalcon experience with your social circles will greatly increase the visibility of the project. More and more people will engage in our community, thus making it more powerful, even more feature rich and popular. Like, '+1', share posts that we constantly post on every social network, engage in discussions regarding those posts. People who discover Phalcon through your interactions will thank you!",
        'about_social_networks_2'         => "私たちはほとんどの人気のあるソーシャルネットワークにアカウントを持っています。私たちのアカウントをフォローする事は、プロジェクトの知名度の向上の手助けになります。",
        'follow_on_twitter'               => 'Twitterでフォローする',
        'facebook_page'                   => 'Facebook ページ',
        'google_plus_page'                => 'Google+ ページ',
        'official_blog'                   => '公式ブログ',
        'star_on_github'                  => 'Github のプロジェクトを Star',
        'thank_you'                       => 'ありがとうございました！',
        'about_thank_you_1'               => '私たちは Phalcon のような最高のフレームワークを作るために私達を後押してくれる貢献者やコミュニティのすべてのメンバーに感謝したいと思います。あなたの優しい言葉と関わりは、私たちはより良い進行を実行するものです。私たちは、あなたの Phalcon への信頼に応え、さらにはそれを超えたいと考えています。',
        'flying_with_phalcon'             => 'Thanks for flying with Phalcon! &lt;3',

        'hosting_description'             => 'PhalconはrootでのSSHアクセス(もしくはsudo)を提供しているホスティングプロバイダであれば、どんな機種にでもインストールすることが出来ます。以下はそのようなサービスを提供している評判の良い企業の一覧です:',
        'hosting_fortrabbit_title'        => 'Fortrabbit',
        'hosting_fortrabbit_1'            => 'Fortrabbit は多くのホスティングプランを（いくつかの制限があり、開発者のための一つであり、自由である）を提供しており、Phalcon を試すか、Phalcon を使用してアプリケーションを展開する開発者のほとんどのニーズを満たします。',
        'hosting_fortrabbit_2'            => "彼らは、さまざまなを <a href=':1:'>拡張</a> 提供しています、それは、最も要求の厳しいプロジェクトを満たすでしょう。",
        'hosting_fortrabbit_3'            => 'Phalcon の安定バージョンがプリインストールされ、管理ダッシュボードからそれらを有効にすることができます。',
        'hosting_webfaction_title'        => 'WebFaction',
        'hosting_webfaction_1'            => 'WebFactionは、開発者のためのホスティング。すべてのお好みのツールを使用して、高速のサーバーへのフルシェルアクセスは、プリインストールされ、ユーザーのために維持した。',
        'hosting_webfaction_2'            => "WebFactionでPhalconをインストールするには、<a href=':1:'>ここ</a> で説明されている指示に従ってください ",
        'hosting_amazon_ec2_title'        => 'Amazon EC2',
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud 提供スケーラブルで、従量制クラウドで容量を計算します。',
        'hosting_amazon_ec2_2'            => "立ち上がってすぐに実行するための事前設定、テンプレートの Amazon Machine Image（AMI ）を選択します。またはあなたのアプリケーション、ライブラリ、データ、および関連する構成設定を含むAMIを作成します。<a href=':1:'>続きを見る</a>",
        'hosting_linode_title'            => "Linode",
        'hosting_linode_1'                => "Deploy and Manage Linux Virtual Servers in the Linode Cloud. Get a server running in seconds with your choice of Linux distro, resources, and node location. <a href=':1:'>See more</a>",
        'hosting_digital_ocean_title'     => 'Digital Ocean',
        'hosting_digital_ocean_1'         => "Blazing Fast Cloud Technology. Built for developers. Deploy an SSD cloud server in 55 seconds. <a href=':1:'>See more</a>",
        'hosting_digital_ocean_2'         => "<p>Follow this <a href=':1:'>tutorial</a> to get started</p>",
        'hosting_rackspace_title'         => "Rackspace",
        'hosting_rackspace_1'             => "Cloud Servers are virtual machines running Linux or Windows&reg; Server in the Rackspace Cloud. You can scale resources like CPU, memory, and storage up or down, depending on your needs. Best of all, you can pay as you go. <a href=':1:'>See more</a>",
        'hosting_install_instructions'    => 'インストールの標準的な手順を使用してPhalconをインストールします。',
        'hosting_azure_title'             => "Windows Azure",
        'hosting_azure_1'                 => "<a href=':1:'>Windows Azure クラウド</a> は、あなたのwebアプリケーションのために、高いスケーラビリティで管理可能な Windows のホスティングを提供します。 インスタンスのコスト削減に Phalcon をお使いください。",
        'hosting_azure_2'                 => "phalcon をインストールするには、<a href=':1:'>この SitePoint の記事</a>の手順に従ってください。",
        'hosting_aspnix_1'                => 'ASPnix provides superior Windows web hosting services. Our customers have rated our service as outstanding. We offer economical plans for shared Windows web hosting, Virtual private servers and dedicated servers!  <a href=":1:">See more</a>',
        'hosting_aspnix_2'                => '<p>Phalcon is supported on all Windows shared web hosting packages and plans, no configuration or installation required! They offer a variety of PHP versions from 5.2 – 5.6 as well as many <a href=":1:" target="_blank">additional extensions</a>!</p>',
        'hosting_layershift_title'        => 'Layershift',
        'hosting_layershift_1'            => "You bring the code, we'll sort the servers. Next generation, auto-sizing PaaS for PHP",
        'hosting_layershift_2'            => "<p>Follow this <a href=':1'>tutorial</a> to get started</p>",

        'testimonials'                    => 'お客様の声',
        'testimonials_description'        => "以下は、あなたや開発者やユーザの皆様から寄せられたPhalcon PHPへの声と成功事例を集めたものです。私たちはいつでも成功事例のメールを歓迎し、私たちのブログでご紹介させていただくかもしれません。もしあなたの成功事例を私たちに送りたい、もしくは私たちに連絡を取りたい場合は、お気軽にこちら<a href='mailto::1:'>:2:</a>までメールでご連絡ください。",
        'testimonials_1'                  => "Greetings, Phalcon team! I have a project, built on Phalcon framework. It's a Guitarama (<a href=':1:'>:2:</a>) - guitars tabs and chords catalog. The site is aimed at the Russian audience, and uses the Russian language, but I hope, there will be no problem to understand most of pages. The site was re-launched on a new platform in the beginning of January, 2013 and has since shown steady growth. Current daily visits: ~1500 unique visitors, ~5000 page views. The site is running on an old physical server 1хP4-3Ghz, 4GB RAM. Once again, thank you for a great framework and all what you are doing :)  Michael.",
        'testimonials_2'                  => "Phalconチームのみなさん。私は <a href=':1:'>:2:</a> and <a href=':3:'>:4:</a> プロジェクトで、Phalcon を使った事による成功事例をお伝えしたいと思います。これらのサイトはカザフスタンで最もアクセスされ負荷が高いサイトであり、CIS圏内でトップ10に分類されるようなサイトです。どちらのサイトも、Phalcon\Mvc\Microで書かれた単一のREST API で動作しています。ピーク時にはAPIプロセスのロードが 400req/sec にもなります。Phalconに移行してから、私たちはレスポンス生成時間やCPU・RAMの消費を減らす事が出来ました。同様に開発プロセスにかかる時間も減らすことが出来ました。新しいプロジェクトでも Phalcon を使い続けるつもりです。みなさんの素晴らしい仕事に感謝します！ Best regards, Nikita Vershinin, Lead Develper, Lolesa.kz and krisha.kz",
        'testimonials_3'                  => "Phalcon チームのみなさん。皆さんが作ったフレームワークは素晴らしいです。こんなにもスピードと効率性と簡潔さと自然な使いやすさを併せ持ったフレームワークは初めてです。このプロジェクトの為になら出来る限りの協力を惜しみません。私は最近800時間規模のプロジェクトを開始しましたが、喜ばしいことにPhalconを使用しています。 Bravo. Brian Seymour",
        'testimonials_4'                  => "みなさん、私は Phalcon を体験しましたが、純粋に素晴らしい。私は単に、 Phalcon がいかに素晴らしいかお伝えしたいのです。このフレームワークに感謝します。これからも頑張ってください。 Ivan Penchev",
        'testimonials_5'                  => "みなさん、私は Phalcon を利用したシンプルな短縮URLサービスを書きましたが、本当に素晴らしかった！ <a href=':1:'>:2:</a>. デモはこちら <a href=':3:'>:4:</a> :) Murat Küçükosman",
        'testimonials_6'                  => "Phalcon チームのみなさん、私は Phalconを使って、ポーランドのユーザー向けの小規模プロジェクトを作りました。パフォーマンスの素晴らしさを認めざるをえません。良い仕事をなされたことを祝福いたします。ポーランド語のWebページのコンテンツをバリデーションするサービスです：  <a href=':1:'></a>:2:</a> ",
        'testimonials_7'                  => "みなさん！私は以前から取り組んでいるプロジェクトの最新版をシェアしたいと思います： <a href=':1:'>:2:</a>
Phalcon に切り替えてから、以前のフレームワークに比べてサーバーの負荷を半分にすることが出来ました！素晴らしい！",

        'support_note'                    => "最新のバージョンを使用しなければ多くのバグと遭遇します。 :1:にアクセスし、最新の利用可能なバージョンをダウンロード(もしくはコンパイル)し、あなたが直面している問題が本当にバグかを確認してください。",
        'support_download_page'           => "ダウンロード ページ",
        'support_documentation_1'         => ":1: を利用する前に、あなたが探しているものを見つけるために私たちのドキュメントで検索機能を使用することができます。もし、あなたの質問はまだ答えていない場合は、下記のより多くのオプションがあります。",
        'support_phalcon_forum'           => "Phalcon フォーラム",
        'support_forum_1'                 => "<a href=':1:'>ディスカッション フォーラム</a> で、あなたは質問することができます。",
        'support_irc'                     => "IRC チャンネル",
        'support_irc_1'                   => "Freenode の :1: チャンネルで私たちを見つけることができます。",
        'support_stack_overflow_1'        => "あなたが、Stack Overflow を好むか慣れ親しんでいる場合、あなたの質問を検索したり、タグを付けるために使用できる <a href=':1:'>phalcon</a> タグがあります。
",
        'support_please_note'             => "注意:",
        'support_please_note_1'           => "Stack Overflow はPhalconをサポートするための専用ではありません",
        'support_please_note_2'           => "そこに新しいバグを上げないでください。 Githubの <a href=':1:'>issue tracker</a> を使用してください。",
        'support_please_note_3'           => "そこに機能要求のための質問を上げないでください。 Githubの <a href=':1:'>issue tracker</a> を使用してください。",
        'support_please_note_4'           => "あなたの質問に 'phalcon' タグが含まれていることを確認してください。",
        'support_please_note_5'           => "質問に 'Phalcon' へのメンションが含まれていることを確認してください。",
        'support_reporting_a_bug'         => "バグを報告する",
        'support_reporting_a_bug_1'       => "あなたは上記のすべての項目を使い果たしたときに、Githubの <a href=':1:'>issue tracker</a> を使用してバグを報告してください。",


    );

    // return $messages;