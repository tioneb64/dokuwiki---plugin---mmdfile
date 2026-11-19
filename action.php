<?php

/**
 * Mmdfile : même vue et même éditeur que « mdfile », pour les diagrammes Mermaid (.mmd, .mermaid).
 * Le diagramme est dessiné par le plugin Kroki (balise <mermaid>).
 */

// la classe parente n'est pas toujours chargée avant celle-ci (appels ajax) : on la charge explicitement
require_once DOKU_PLUGIN . 'mdfile/action.php';

class action_plugin_mmdfile extends action_plugin_mdfile
{
    protected $act = 'mmdfile';

    protected function wikitext(string $raw): string
    {
        return "<mermaid>\n" . rtrim($raw) . "\n</mermaid>";
    }

    /** La source reste visible sous le diagramme */
    protected function extraView(string $raw): string
    {
        return '<details class="mmdfile-source"><summary>' . hsc($this->getLang('source')) . '</summary>'
            . '<pre class="code">' . hsc($raw) . '</pre></details>';
    }
}
