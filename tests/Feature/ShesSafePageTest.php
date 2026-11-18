<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShesSafePageTest extends TestCase
{
    public function test_the_concept_page_is_available_in_french(): void
    {
        $this->withSession(['locale' => 'fr'])
            ->get('/solutions/shes-safe')
            ->assertOk()
            ->assertSee("SHE'S SAFE")
            ->assertSee("Un geste discret pour demander de l'aide.")
            ->assertSee('bracelet SOS')
            ->assertSee('images/shes-safe/bracelet-concept.png')
            ->assertSee('images/shes-safe/technical-diagram-v2.png');
    }

    public function test_the_concept_page_is_available_in_english(): void
    {
        $this->withSession(['locale' => 'en'])
            ->get('/solutions/shes-safe')
            ->assertOk()
            ->assertSee('One discreet action to ask for help.');
    }

    public function test_the_concept_page_is_translated_in_other_site_languages(): void
    {
        foreach (['es', 'it', 'zh'] as $locale) {
            $title = trans('shes-safe.hero_title', [], $locale);
            $this->assertNotSame('shes-safe.hero_title', $title);
            $this->withSession(['locale' => $locale])
                ->get('/solutions/shes-safe')
                ->assertOk()
                ->assertSee($title);
        }
    }

    public function test_the_solutions_catalog_links_to_the_concept(): void
    {
        $this->get('/solutions')
            ->assertOk()
            ->assertSee('/solutions/shes-safe');
    }
}
