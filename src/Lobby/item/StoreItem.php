<?php

namespace Lobby\item;

use muqsit\invmenu\InvMenu;
use muqsit\invmenu\transaction\InvMenuTransaction;
use muqsit\invmenu\transaction\InvMenuTransactionResult;
use muqsit\invmenu\type\InvMenuTypeIds;
use pocketmine\block\VanillaBlocks;
use pocketmine\data\bedrock\EnchantmentIdMap;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\item\ItemFactory;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemIds;
use pocketmine\item\ItemUseResult;
use pocketmine\item\VanillaItems;
use pocketmine\math\Vector3;
use pocketmine\player\Player;

class StoreItem extends LobbyItem
{

    public function __construct()
    {
        parent::__construct(new ItemIdentifier(ItemIds::CHEST, 0), "§r§6Holy Store §r§7(Right Click)");
    }

    public function onClickAir(Player $player, Vector3 $directionVector): ItemUseResult
    {
        $menu = InvMenu::create(InvMenuTypeIds::TYPE_CHEST);
        $red = ItemFactory::getInstance()->get(160, 14)->setCustomName(" ")->setLore(["§r "])->addEnchantment(new EnchantmentInstance(EnchantmentIdMap::getInstance()->fromId(1), 1));
        $green = ItemFactory::getInstance()->get(160, 13)->setCustomName(" ")->setLore(["§r "])->addEnchantment(new EnchantmentInstance(EnchantmentIdMap::getInstance()->fromId(1), 1));
        $menu->setName("§r§8Servers");
        $menu->getInventory()->setContents([
            0 => $red,
            1 => $green,
            7 => $green,
            8 => $red,
            9 => $green,
            17 => $green,
            18 => $red,
            19 => $green,
            25 => $green,
            26 => $red,

            3 => VanillaItems::EMERALD()->setCustomName("§r§l§6Ranks")->setLore(["§r§f\n§r§fClick to open §6Ranks §fshop!\n"])->addEnchantment(new EnchantmentInstance(EnchantmentIdMap::getInstance()->fromId(1), 1)),
            4 => VanillaBlocks::REDSTONE()->asItem()->setCustomName("§r§l§6Punishments")->setLore(["§r§f\n§r§fClick to open §6Unban/Unmute §fshop!\n"])->addEnchantment(new EnchantmentInstance(EnchantmentIdMap::getInstance()->fromId(1), 1)),
            5 => VanillaItems::DIAMOND()->setCustomName("§r§l§6Rank Upgrades")->setLore(["§r§f\n§r§fClick to open §6Rank Upgrades §fshop!\n"])->addEnchantment(new EnchantmentInstance(EnchantmentIdMap::getInstance()->fromId(1), 1)),
            13 => VanillaItems::DIAMOND()->setCustomName("§r§l§6VIP Status")->setLore(["§r§f\n§r§fClick to open §r§e§k|§r §6VIP Status §r§e§k|§r §fshop!\n"])->addEnchantment(new EnchantmentInstance(EnchantmentIdMap::getInstance()->fromId(1), 1)),
            21 => VanillaItems::DIAMOND_HELMET()->setCustomName("§r§l§6Kits")->setLore(["§r§f\n§r§fClick to open §6Kits §fshop!\n"])->addEnchantment(new EnchantmentInstance(EnchantmentIdMap::getInstance()->fromId(1), 1)),
            22 => VanillaItems::ENDER_PEARL()->setCustomName("§r§l§6Your Coins")->setLore(["§r§f§7You have §a0 coins"])->addEnchantment(new EnchantmentInstance(EnchantmentIdMap::getInstance()->fromId(1), 1)),
            23 => VanillaItems::EMERALD()->setCustomName("§r§l§6Keys")->setLore(["§r§f\n§r§4§lWARNING\n§r§o§fPlease purchase the keys from the modality your desire,\notherwise a staff member will have to check manually.\n\n§r§4§lADVERTENCIA\n§r§f§oPor favor compra las keys desde la modalidad que desees,\nsino un miembro del staff tendra que dartelas manualmente.\n"])->addEnchantment(new EnchantmentInstance(EnchantmentIdMap::getInstance()->fromId(1), 1)),
        ]);

        $menu->setListener(function (InvMenuTransaction $transaction): InvMenuTransactionResult {
            $player = $transaction->getPlayer();

            if($transaction->getItemClicked()->getCustomName() === "§r§6Ranks"){
                $player->sendMessage("§r§cComing Soon!");
            }
            if($transaction->getItemClicked()->getCustomName() === "§r§l§6Punishments") {
                $player->sendMessage("§r§cComing Soon!");
            }
            if($transaction->getItemClicked()->getCustomName() === "§r§l§6Rank Upgrades") {
                $player->sendMessage("§r§cComing Soon!");
            }
            if($transaction->getItemClicked()->getCustomName() === "§r§l§6VIP Status") {
                $player->sendMessage("§r§cComing Soon!");
            }
            if($transaction->getItemClicked()->getCustomName() === "§r§l§6Kits") {
                $player->sendMessage("§r§cComing Soon!");
            }
            if($transaction->getItemClicked()->getCustomName() === "§r§l§6Your Coins") {
                $player->sendMessage("§r§cComing Soon!");
            }
            if($transaction->getItemClicked()->getCustomName() === "§r§l§6Keys") {
                $player->sendMessage("§r§cComing Soon!");
            }
            return $transaction->discard();
        });
        $menu->send($player);
        return ItemUseResult::SUCCESS();
    }

}
{

}