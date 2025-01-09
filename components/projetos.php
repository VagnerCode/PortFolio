<?php
$projetos = [
    [
        "titulo" => "Meu Portfolio ",
        "finalizado" => true,
        "ano" => 2025,
        "descricao" => "Este é meu portfólio pessoal, desenvolvido com PHP e TailwindCSS para destacar projetos e habilidades de forma dinâmica e responsiva, com um design moderno e intuitivo.",
        "stack" => ["PHP", "HTML", "TAILWIND CSS"],
        "img" => "../assets/projeto-portfolio.png"
    ],

];

?>


<?php foreach ($projetos as $projeto) : ?>
    <!--      Projetos      -->
    <div class="mx-auto max-w-screen-lg min-h-20 flex flex-col items-center justify-center text-center space-y-6 my-4">
        <div class="bg-[#E5E7EB]/5 rounded-lg p-3 flex items-center ">
            <div class="w-1/5 flex items-center justify-middle">
                <img src="<?= $projeto['img'] ?>" class="h-42 rounded-md shadow-xl">
            </div>

            <div class="w-4/5 space-y-3">
                <div class="flex gap-3 justify-between">

                    <h3 class="font-semibold text-xl">
                        <?php if ($projeto['finalizado']): ?>✔<?php endif; ?>

                        <?= $projeto['titulo'] ?>

                        <?php if ($projeto['finalizado']): ?>
                            <span class="text-xs test-gray-400 opacity-50 italic">(finalizado em <?= $projeto['ano'] ?>)</span>
                        <?php else: ?>
                            <span class="text-xs test-gray-400 opacity-50 italic">(Em andamento)</span>
                        <?php endif; ?>
                    </h3>

                    <div class="space-x-2">
                        <?php

                        $colors = ['fuchsia', 'yellow', 'red', 'sky'];

                        foreach ($projeto['stack'] as $posicao =>  $language):

                        ?>


                            <span class="bg-<?= $colors[$posicao] ?>-400 text-fuchsia-900 rounded-md px-2 py-1 font-semibold text-xs">
                                <?= $language ?>
                            </span>

                        <?php endforeach; ?>
                    </div>

                </div>

                <p class="leading-6">
                    <?= $projeto['descricao'] ?>
                </p>
            </div>

        </div>
    </div>
<?php endforeach; ?>