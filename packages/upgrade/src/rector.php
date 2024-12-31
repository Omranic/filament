<?php

use Filament\Upgrade\Rector;
use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\Rector\String_\RenameStringRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rules([
        Rector\SimpleMethodChangesRector::class,
        Rector\SimplePropertyChangesRector::class,
    ]);

    $rectorConfig->ruleWithConfiguration(
        RenameClassRector::class,
        // @todo Alphabetical
        [
            'Filament\\Forms\\Commands\\MakeLayoutComponentCommand' => 'Filament\\Schemas\\Commands\\MakeLayoutComponentCommand',
            'Filament\\Pages\\Actions\\Action' => 'Filament\\Actions\\Action',
            'Filament\\Forms\\Components\\BelongsToManyCheckboxList' => 'Filament\\Forms\\Components\\CheckboxList',
            'Filament\\Forms\\Components\\BelongsToManyMultiSelect' => 'Filament\\Forms\\Components\\MultiSelect',
            'Filament\\Forms\\Components\\BelongsToSelect' => 'Filament\\Forms\\Components\\Select',
            'Filament\\Forms\\Components\\Card' => 'Filament\\Schemas\\Components\\Section',
            'Filament\\Forms\\Components\\HasManyRepeater' => 'Filament\\Forms\\Components\\RelationshipRepeater',
            'Filament\\Forms\\Components\\MorphManyRepeater' => 'Filament\\Forms\\Components\\RelationshipRepeater',
            'Filament\\Actions\\Exceptions\\Hold' => 'Filament\\Support\\Exceptions\\Halt',
            'Filament\\Actions\\Modal\\Actions' => 'Filament\\Actions\\Action',
            'Filament\\Forms\\Components\\Concerns\\HasExtraAlpineAttributes' => 'Filament\\Support\\Concerns\\HasExtraAlpineAttributes',
            'Filament\\Forms\\Components\\Concerns\\HasExtraAttributes' => 'Filament\\Support\\Concerns\\HasExtraAttributes',
            'Filament\\Infolists\\Components\\Card' => 'Filament\\Schemas\\Components\\Section',
            'Filament\\Http\\Livewire\\Auth\\Login' => 'Filament\\Auth\\Pages\\Login',
            'Filament\\Navigation\\UserMenuItem' => 'Filament\\Navigation\\MenuItem',
            'Filament\\Pages\\Actions\\Modal\\Actions\\Action' => 'Filament\\Actions\\Action',
            'Filament\\Pages\\Actions\\Modal\\Actions\\ButtonAction' => 'Filament\\Actions\\Action',
            'Filament\\Pages\\Actions\\ActionGroup' => 'Filament\\Actions\\ActionGroup',
            'Filament\\Pages\\Actions\\ButtonAction' => 'Filament\\Actions\\Action',
            'Filament\\Pages\\Actions\\CreateAction' => 'Filament\\Actions\\CreateAction',
            'Filament\\Pages\\Actions\\DeleteAction' => 'Filament\\Actions\\DeleteAction',
            'Filament\\Pages\\Actions\\EditAction' => 'Filament\\Actions\\EditAction',
            'Filament\\Pages\\Actions\\ForceDeleteAction' => 'Filament\\Actions\\ForceDeleteAction',
            'Filament\\Pages\\Actions\\ReplicateAction' => 'Filament\\Actions\\ReplicateAction',
            'Filament\\Pages\\Actions\\RestoreAction' => 'Filament\\Actions\\RestoreAction',
            'Filament\\Pages\\Actions\\SelectAction' => 'Filament\\Actions\\SelectAction',
            'Filament\\Pages\\Actions\\ViewAction' => 'Filament\\Actions\\ViewAction',
            'Filament\\Resources\\Pages\\ListRecords\\Tab' => 'Filament\\Resources\\Components\\Tab',
            'Filament\\Tables\\Actions\\Modal\\Actions\\Action' => 'Filament\\Actions\\Action',
            'Filament\\Tables\\Actions\\Modal\\Actions\\ButtonAction' => 'Filament\\Actions\\Action',
            'Filament\\Tables\\Actions\\LinkAction' => 'Filament\\Actions\\Action',
            'Filament\\Tables\\Columns\\Concerns\\HasExtraAttributes' => 'Filament\\Support\\Concerns\\HasExtraAttributes',
            'Filament\\Widgets\\StatsOverviewWidget\\Card' => 'Filament\\Widgets\\StatsOverviewWidget\\Stat',
            'Filament\\Forms\\Concerns\\BelongsToLivewire' => 'Filament\\Schemas\\Concerns\\BelongsToLivewire',
            'Filament\\Forms\\Concerns\\BelongsToModel' => 'Filament\\Schemas\\Concerns\\BelongsToModel',
            'Filament\\Forms\\Concerns\\BelongsToParentComponent' => 'Filament\\Schemas\\Concerns\\BelongsToParentComponent',
            'Filament\\Forms\\Concerns\\CanBeDisabled' => 'Filament\\Schemas\\Concerns\\CanBeDisabled',
            'Filament\\Forms\\Concerns\\CanBeHidden' => 'Filament\\Schemas\\Concerns\\CanBeHidden',
            'Filament\\Forms\\Concerns\\CanBeValidated' => 'Filament\\Schemas\\Concerns\\CanBeValidated',
            'Filament\\Forms\\Concerns\\Cloneable' => 'Filament\\Schemas\\Concerns\\Cloneable',
            'Filament\\Forms\\Concerns\\HasComponents' => 'Filament\\Schemas\\Concerns\\HasComponents',
            'Filament\\Forms\\Concerns\\HasFieldWrapper' => 'Filament\\Schemas\\Concerns\\HasFieldWrapper',
            'Filament\\Forms\\Concerns\\HasInlineLabels' => 'Filament\\Schemas\\Concerns\\HasInlineLabels',
            'Filament\\Forms\\Concerns\\HasOperation' => 'Filament\\Schemas\\Concerns\\HasOperation',
            'Filament\\Forms\\Concerns\\HasState' => 'Filament\\Schemas\\Concerns\\HasState',
            'Filament\\Forms\\Concerns\\HasColumns' => 'Filament\\Schemas\\Concerns\\HasColumns',
            'Filament\\Infolists\\Concerns\\HasColumns' => 'Filament\\Schemas\\Concerns\\HasColumns',
            'Filament\\Infolists\\Infolist' => 'Filament\\Schemas\\Schema',
            'Filament\\Forms\\Concerns\\HasStateBindingModifiers' => 'Filament\\Schemas\\Concerns\\HasStateBindingModifiers',
            'Filament\\Forms\\Form' => 'Filament\\Schemas\\Schema',
            'Filament\\Forms\\Get' => 'Filament\\Schemas\\Components\\Utilities\\Get',
            'Filament\\Forms\\Set' => 'Filament\\Schemas\\Components\\Utilities\\Set',
            'Filament\\Forms\\Components\\Component' => 'Filament\\Schemas\\Components\\Component',
            'Filament\\Forms\\Components\\Concerns\\BelongsToContainer' => 'Filament\\Schemas\\Components\\Concerns\\BelongsToContainer',
            'Filament\\Forms\\Components\\Concerns\\BelongsToModel' => 'Filament\\Schemas\\Components\\Concerns\\BelongsToModel',
            'Filament\\Forms\\Components\\Concerns\\CanBeConcealed' => 'Filament\\Schemas\\Components\\Concerns\\CanBeConcealed',
            'Filament\\Forms\\Components\\Concerns\\CanBeDisabled' => 'Filament\\Schemas\\Components\\Concerns\\CanBeDisabled',
            'Filament\\Forms\\Components\\Concerns\\CanBeHidden' => 'Filament\\Schemas\\Components\\Concerns\\CanBeHidden',
            'Filament\\Forms\\Components\\Concerns\\CanBeRepeated' => 'Filament\\Schemas\\Components\\Concerns\\CanBeRepeated',
            'Filament\\Forms\\Components\\Concerns\\CanSpanColumns' => 'Filament\\Schemas\\Components\\Concerns\\CanSpanColumns',
            'Filament\\Forms\\Components\\Concerns\\Cloneable' => 'Filament\\Schemas\\Components\\Concerns\\Cloneable',
            'Filament\\Forms\\Components\\Concerns\\HasActions' => 'Filament\\Schemas\\Components\\Concerns\\HasActions',
            'Filament\\Forms\\Components\\Concerns\\HasChildComponents' => 'Filament\\Schemas\\Components\\Concerns\\HasChildComponents',
            'Filament\\Forms\\Components\\Concerns\\HasFieldWrapper' => 'Filament\\Schemas\\Components\\Concerns\\HasFieldWrapper',
            'Filament\\Forms\\Components\\Concerns\\HasId' => 'Filament\\Schemas\\Components\\Concerns\\HasId',
            'Filament\\Forms\\Components\\Concerns\\HasInlineLabel' => 'Filament\\Schemas\\Components\\Concerns\\HasInlineLabel',
            'Filament\\Forms\\Components\\Concerns\\HasKey' => 'Filament\\Schemas\\Components\\Concerns\\HasKey',
            'Filament\\Forms\\Components\\Concerns\\HasLabel' => 'Filament\\Schemas\\Components\\Concerns\\HasLabel',
            'Filament\\Forms\\Components\\Concerns\\HasMaxWidth' => 'Filament\\Schemas\\Components\\Concerns\\HasMaxWidth',
            'Filament\\Forms\\Components\\Concerns\\HasMeta' => 'Filament\\Schemas\\Components\\Concerns\\HasMeta',
            'Filament\\Forms\\Components\\Concerns\\HasState' => 'Filament\\Schemas\\Components\\Concerns\\HasState',
            'Filament\\Forms\\Components\\Actions\\Concerns\\BelongsToComponent' => 'Filament\\Actions\\Concerns\\BelongsToSchemaComponent',
            'Filament\\Forms\\Components\\Actions' => 'Filament\\Schemas\\Components\\Actions',
            'Filament\\Forms\\Components\\Actions\\Action' => 'Filament\\Actions\\Action',
            'Filament\\Forms\\Components\\Actions\\ActionContainer' => 'Filament\\Schemas\\Components\\Actions\\ActionContainer',
            'Filament\\Forms\\Components\\Tabs' => 'Filament\\Schemas\\Components\\Tabs',
            'Filament\\Forms\\Components\\Tabs\\Tab' => 'Filament\\Schemas\\Components\\Tabs\\Tab',
            'Filament\\Forms\\Components\\Contracts\\CanConcealComponents' => 'Filament\\Schemas\\Components\\Contracts\\CanConcealComponents',
            'Filament\\Forms\\Components\\Wizard' => 'Filament\\Schemas\\Components\\Wizard',
            'Filament\\Forms\\Components\\Wizard\\Step' => 'Filament\\Schemas\\Components\\Wizard\\Step',
            'Filament\\Forms\\Components\\Fieldset' => 'Filament\\Schemas\\Components\\Fieldset',
            'Filament\\Forms\\Components\\Concerns\\EntanglesStateWithSingularRelationship' => 'Filament\\Schemas\\Components\\Concerns\\EntanglesStateWithSingularRelationship',
            'Filament\\Forms\\Components\\Contracts\\CanEntangleWithSingularRelationships' => 'Filament\\Schemas\\Components\\Contracts\\CanEntangleWithSingularRelationships',
            'Filament\\Forms\\Components\\Grid' => 'Filament\\Schemas\\Components\\Grid',
            'Filament\\Forms\\Components\\Group' => 'Filament\\Schemas\\Components\\Group',
            'Filament\\Forms\\Components\\Livewire' => 'Filament\\Schemas\\Components\\Livewire',
            'Filament\\Forms\\Components\\Section' => 'Filament\\Schemas\\Components\\Section',
            'Filament\\Forms\\Components\\Split' => 'Filament\\Schemas\\Components\\Split',
            'Filament\\Forms\\Components\\View' => 'Filament\\Schemas\\Components\\View',
            'Filament\\Forms\\Components\\Concerns\\CanBeCollapsed' => 'Filament\\Schemas\\Components\\Concerns\\CanBeCollapsed',
            'Filament\\Forms\\Components\\Concerns\\CanBeCompacted' => 'Filament\\Schemas\\Components\\Concerns\\CanBeCompacted',
            'Filament\\Forms\\Components\\Concerns\\HasFooterActions' => 'Filament\\Schemas\\Components\\Concerns\\HasFooterActions',
            'Filament\\Forms\\Components\\Concerns\\HasHeaderActions' => 'Filament\\Schemas\\Components\\Concerns\\HasHeaderActions',
            'Filament\\Forms\\Components\\Contracts\\HasFooterActions' => 'Filament\\Schemas\\Components\\Contracts\\HasFooterActions',
            'Filament\\Forms\\Components\\Contracts\\HasHeaderActions' => 'Filament\\Schemas\\Components\\Contracts\\HasHeaderActions',
            'Filament\\Infolists\\ComponentContainer' => 'Filament\\Schemas\\Schema',
            'Filament\\Infolists\\Concerns\\BelongsToLivewire' => 'Filament\\Schemas\\Concerns\\BelongsToLivewire',
            'Filament\\Infolists\\Concerns\\BelongsToParentComponent' => 'Filament\\Schemas\\Concerns\\BelongsToParentComponent',
            'Filament\\Infolists\\Concerns\\CanBeHidden' => 'Filament\\Schemas\\Concerns\\CanBeHidden',
            'Filament\\Infolists\\Concerns\\Cloneable' => 'Filament\\Schemas\\Concerns\\Cloneable',
            'Filament\\Infolists\\Concerns\\HasComponents' => 'Filament\\Schemas\\Concerns\\HasComponents',
            'Filament\\Infolists\\Concerns\\HasInlineLabels' => 'Filament\\Schemas\\Concerns\\HasInlineLabels',
            'Filament\\Infolists\\Concerns\\HasState' => 'Filament\\Schemas\\Concerns\\HasState',
            'Filament\\Infolists\\Concerns\\HasEntryWrapper' => 'Filament\\Schemas\\Concerns\\HasEntryWrapper',
            'Filament\\Infolists\\Components\\Actions\\Action' => 'Filament\\Actions\\Action',
            'Filament\\Infolists\\Components\\Component' => 'Filament\\Schemas\\Components\\Component',
            'Filament\\Infolists\\Components\\Actions\\Concerns\\BelongsToInfolist' => 'Filament\\Actions\\Concerns\\BelongsToSchemaComponent',
            'Filament\\Infolists\\Components\\Concerns\\BelongsToContainer' => 'Filament\\Schemas\\Components\\Concerns\\BelongsToContainer',
            'Filament\\Infolists\\Components\\Concerns\\CanBeHidden' => 'Filament\\Schemas\\Components\\Concerns\\CanBeHidden',
            'Filament\\Infolists\\Components\\Concerns\\CanSpanColumns' => 'Filament\\Schemas\\Components\\Concerns\\CanSpanColumns',
            'Filament\\Infolists\\Components\\Concerns\\Cloneable' => 'Filament\\Schemas\\Components\\Concerns\\Cloneable',
            'Filament\\Infolists\\Components\\Concerns\\HasActions' => 'Filament\\Schemas\\Components\\Concerns\\HasActions',
            'Filament\\Infolists\\Components\\Concerns\\HasChildComponents' => 'Filament\\Schemas\\Components\\Concerns\\HasChildComponents',
            'Filament\\Infolists\\Components\\Concerns\\HasId' => 'Filament\\Schemas\\Components\\Concerns\\HasId',
            'Filament\\Infolists\\Components\\Concerns\\HasInlineLabel' => 'Filament\\Schemas\\Components\\Concerns\\HasInlineLabel',
            'Filament\\Infolists\\Components\\Concerns\\HasKey' => 'Filament\\Schemas\\Components\\Concerns\\HasKey',
            'Filament\\Infolists\\Components\\Concerns\\HasLabel' => 'Filament\\Schemas\\Components\\Concerns\\HasLabel',
            'Filament\\Infolists\\Components\\Concerns\\HasMaxWidth' => 'Filament\\Schemas\\Components\\Concerns\\HasMaxWidth',
            'Filament\\Infolists\\Components\\Concerns\\HasEntryWrapper' => 'Filament\\Schemas\\Components\\Concerns\\HasEntryWrapper',
            'Filament\\Infolists\\Components\\Concerns\\HasMeta' => 'Filament\\Schemas\\Components\\Concerns\\HasMeta',
            'Filament\\Infolists\\Components\\Concerns\\HasState' => 'Filament\\Schemas\\Components\\Concerns\\HasState',
            'Filament\\Infolists\\Components\\Concerns\\CanGetStateFromRelationships' => 'Filament\\Schemas\\Components\\Concerns\\CanGetStateFromRelationships',
            'Filament\\Infolists\\Components\\Contracts\\HasAffixActions' => 'Filament\\Schemas\\Components\\Contracts\\HasAffixActions',
            'Filament\\Forms\\Components\\Contracts\\HasAffixActions' => 'Filament\\Schemas\\Components\\Contracts\\HasAffixActions',
            'Filament\\Forms\\Components\\Contracts\\HasExtraItemActions' => 'Filament\\Schemas\\Components\\Contracts\\HasExtraItemActions',
            'Filament\\Infolists\\Commands\\MakeLayoutComponentCommand' => 'Filament\\Schemas\\Commands\\MakeLayoutComponentCommand',
            'Filament\\Infolists\\Components\\Actions' => 'Filament\\Schemas\\Components\\Actions',
            'Filament\\Infolists\\Components\\Actions\\ActionContainer' => 'Filament\\Schemas\\Components\\Actions\\ActionContainer',
            'Filament\\Infolists\\Components\\Tabs' => 'Filament\\Schemas\\Components\\Tabs',
            'Filament\\Infolists\\Components\\Tabs\\Tab' => 'Filament\\Schemas\\Components\\Tabs\\Tab',
            'Filament\\Infolists\\Components\\Fieldset' => 'Filament\\Schemas\\Components\\Fieldset',
            'Filament\\Infolists\\Components\\Concerns\\EntanglesStateWithSingularRelationship' => 'Filament\\Schemas\\Components\\Concerns\\EntanglesStateWithSingularRelationship',
            'Filament\\Infolists\\Components\\Grid' => 'Filament\\Schemas\\Components\\Grid',
            'Filament\\Infolists\\Components\\Group' => 'Filament\\Schemas\\Components\\Group',
            'Filament\\Infolists\\Components\\Livewire' => 'Filament\\Schemas\\Components\\Livewire',
            'Filament\\Infolists\\Components\\Section' => 'Filament\\Schemas\\Components\\Section',
            'Filament\\Infolists\\Components\\Split' => 'Filament\\Schemas\\Components\\Split',
            'Filament\\Infolists\\Components\\View' => 'Filament\\Schemas\\Components\\View',
            'Filament\\Infolists\\Components\\Concerns\\CanBeCollapsed' => 'Filament\\Schemas\\Components\\Concerns\\CanBeCollapsed',
            'Filament\\Infolists\\Components\\Concerns\\CanBeCompacted' => 'Filament\\Schemas\\Components\\Concerns\\CanBeCompacted',
            'Filament\\Infolists\\Components\\Concerns\\HasFooterActions' => 'Filament\\Schemas\\Components\\Concerns\\HasFooterActions',
            'Filament\\Infolists\\Components\\Concerns\\HasHeaderActions' => 'Filament\\Schemas\\Components\\Concerns\\HasHeaderActions',
            'Filament\\Actions\\MountableAction' => 'Filament\\Actions\\Action',
            'Filament\\Tables\\Actions\\Action' => 'Filament\\Actions\\Action',
            'Filament\\Tables\\Actions\\BulkAction' => 'Filament\\Actions\\BulkAction',
            'Filament\\Tables\\Actions\\AssociateAction' => 'Filament\\Actions\\AssociateAction',
            'Filament\\Tables\\Actions\\AttachAction' => 'Filament\\Actions\\AttachAction',
            'Filament\\Tables\\Actions\\BulkActionGroup' => 'Filament\\Actions\\BulkActionGroup',
            'Filament\\Tables\\Actions\\ButtonAction' => 'Filament\\Actions\\ButtonAction',
            'Filament\\Tables\\Actions\\DeleteBulkAction' => 'Filament\\Actions\\DeleteBulkAction',
            'Filament\\Tables\\Actions\\DetachAction' => 'Filament\\Actions\\DetachAction',
            'Filament\\Tables\\Actions\\DetachBulkAction' => 'Filament\\Actions\\DetachBulkAction',
            'Filament\\Tables\\Actions\\DissociateAction' => 'Filament\\Actions\\DissociateAction',
            'Filament\\Tables\\Actions\\DissociateBulkAction' => 'Filament\\Actions\\DissociateBulkAction',
            'Filament\\Tables\\Actions\\ExportBulkAction' => 'Filament\\Actions\\ExportBulkAction',
            'Filament\\Tables\\Actions\\ForceDeleteBulkAction' => 'Filament\\Actions\\ForceDeleteBulkAction',
            'Filament\\Tables\\Actions\\IconButtonAction' => 'Filament\\Actions\\IconButtonAction',
            'Filament\\Tables\\Actions\\RestoreBulkAction' => 'Filament\\Actions\\RestoreBulkAction',
            'Filament\\Tables\\Actions\\ActionGroup' => 'Filament\\Actions\\ActionGroup',
            'Filament\\Tables\\Actions\\CreateAction' => 'Filament\\Actions\\CreateAction',
            'Filament\\Tables\\Actions\\DeleteAction' => 'Filament\\Actions\\DeleteAction',
            'Filament\\Tables\\Actions\\EditAction' => 'Filament\\Actions\\EditAction',
            'Filament\\Tables\\Actions\\ExportAction' => 'Filament\\Actions\\ExportAction',
            'Filament\\Tables\\Actions\\ForceDeleteAction' => 'Filament\\Actions\\ForceDeleteAction',
            'Filament\\Tables\\Actions\\ImportAction' => 'Filament\\Actions\\ImportAction',
            'Filament\\Tables\\Actions\\ReplicateAction' => 'Filament\\Actions\\ReplicateAction',
            'Filament\\Tables\\Actions\\RestoreAction' => 'Filament\\Actions\\RestoreAction',
            'Filament\\Tables\\Actions\\SelectAction' => 'Filament\\Actions\\SelectAction',
            'Filament\\Tables\\Actions\\ViewAction' => 'Filament\\Actions\\ViewAction',
            'Filament\\Actions\\StaticAction' => 'Filament\\Actions\\Action',
            'Filament\\Notifications\\Actions\\Action' => 'Filament\\Actions\\Action',
            'Filament\\Notifications\\Actions\\ActionGroup' => 'Filament\\Actions\\ActionGroup',
            'Filament\\GlobalSearch\\Actions\\Action' => 'Filament\\Actions\\Action',
            'Filament\\Support\\Concerns\\HasExtraSidebarAttributes' => 'Filament\\Navigation\\Concerns\\HasExtraSidebarAttributes',
            'Filament\\Support\\Concerns\\HasExtraTopbarAttributes' => 'Filament\\Navigation\\Concerns\\HasExtraTopbarAttributes',
            'Filament\\Support\\Concerns\\CanPersistTab' => 'Filament\\Schemas\\Components\\Concerns\\CanPersistTab',
            'Filament\\Support\\Concerns\\HasDescription' => 'Filament\\Schemas\\Components\\Concerns\\HasDescription',
            'Filament\\Support\\Concerns\\HasFooterActionsAlignment' => 'Filament\\Schemas\\Components\\Concerns\\HasFooterActionsAlignment',
            'Filament\\Support\\Concerns\\HasHeading' => 'Filament\\Schemas\\Components\\Concerns\\HasHeading',
            'Filament\\Support\\Concerns\\ResolvesDynamicLivewireProperties' => 'Filament\\Schemas\\Concerns\\ResolvesDynamicLivewireProperties',
            'Filament\\Infolists\\Components\\IconEntry\\IconEntrySize' => 'Filament\\Infolists\\Components\\IconEntry\\Enums\\IconEntrySize',
            'Filament\\Infolists\\Components\\TextEntry\\TextEntrySize' => 'Filament\\Infolists\\Components\\TextEntry\\Enums\\TextEntrySize',
            'Filament\\Tables\\Columns\\IconColumn\\IconColumnSize' => 'Filament\\Tables\\Columns\\IconColumn\\Enums\\IconColumnSize',
            'Filament\\Tables\\Columns\\TextColumn\\TextColumnSize' => 'Filament\\Tables\\Columns\\TextColumn\\Enums\\TextColumnSize',
            'Filament\\Pages\\SubNavigationPosition' => 'Filament\\Pages\\Enums\\SubNavigationPosition',
            'Filament\\Resources\\Pages\\ContentTabPosition' => 'Filament\\Resources\\Pages\\Enums\\ContentTabPosition',
            'Filament\\Tables\\Columns\\Concerns\\HasTooltip' => 'Filament\\Support\\Concerns\\HasTooltip',
            'Filament\\Actions\\Concerns\\HasTooltip' => 'Filament\\Support\\Concerns\\HasTooltip',
            'Filament\\Infolists\\Components\\Concerns\\HasTooltip' => 'Filament\\Support\\Concerns\\HasTooltip',
            'Filament\\Infolists\\Components\\Concerns\\HasFontFamily' => 'Filament\\Support\\Concerns\\HasFontFamily',
            'Filament\\Infolists\\Components\\Concerns\\HasWeight' => 'Filament\\Support\\Concerns\\HasWeight',
            'Filament\\Tables\\Columns\\Concerns\\HasFontFamily' => 'Filament\\Support\\Concerns\\HasFontFamily',
            'Filament\\Tables\\Columns\\Concerns\\HasWeight' => 'Filament\\Support\\Concerns\\HasWeight',
            'Filament\\Resources\\Components\\Tab' => 'Filament\\Schemas\\Components\\Tabs\\Tab',
            'Filament\\Billing\\Providers\\Contracts\\Provider' => 'Filament\\Billing\\Providers\\Contracts\\BillingProvider',
            'Filament\\GlobalSearch\\Contracts\\GlobalSearchProvider' => 'Filament\\GlobalSearch\\Providers\\Contracts\\GlobalSearchProvider',
            'Filament\\GlobalSearch\\DefaultGlobalSearchProvider' => 'Filament\\GlobalSearch\\Providers\\DefaultGlobalSearchProvider',
        ],
    );

    $rectorConfig->ruleWithConfiguration(
        RenameStringRector::class,
        [
            'filament-forms::component-container' => 'filament-schema::schema',
            'filament-infolists::component-container' => 'filament-schema::schema',
            'filament-forms::components.actions' => 'filament-schema::components.actions',
            'filament-forms::components.actions.action-container' => 'filament-schema::components.actions.action-container',
            'filament-forms::components.tabs' => 'filament-schema::components.tabs',
            'filament-forms::components.tabs.tab' => 'filament-schema::components.tabs.tab',
            'filament-forms::components.wizard' => 'filament-schema::components.wizard',
            'filament-forms::components.wizard.step' => 'filament-schema::components.wizard.step',
            'filament-forms::components.fieldset' => 'filament-schema::components.fieldset',
            'filament-forms::components.grid' => 'filament-schema::components.grid',
            'filament-forms::components.group' => 'filament-schema::components.grid',
            'filament-forms::components.livewire' => 'filament-schema::components.livewire',
            'filament-forms::components.section' => 'filament-schema::components.section',
            'filament-forms::components.split' => 'filament-schema::components.split',
            'filament-infolists::components.actions' => 'filament-schema::components.actions',
            'filament-infolists::components.actions.action-container' => 'filament-schema::components.actions.action-container',
            'filament-infolists::components.tabs' => 'filament-schema::components.tabs',
            'filament-infolists::components.tabs.tab' => 'filament-schema::components.tabs.tab',
            'filament-infolists::components.fieldset' => 'filament-schema::components.fieldset',
            'filament-infolists::components.grid' => 'filament-schema::components.grid',
            'filament-infolists::components.group' => 'filament-schema::components.grid',
            'filament-infolists::components.livewire' => 'filament-schema::components.livewire',
            'filament-infolists::components.section' => 'filament-schema::components.section',
            'filament-infolists::components.split' => 'filament-schema::components.split',
        ],
    );
};
