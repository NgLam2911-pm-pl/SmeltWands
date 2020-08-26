<?php

namespace NgLamVN\SmeltWands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;
use pocketmine\tile\Chest;

class SmeltWands extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        //TODO: Just a simple plugin, so I not use more class like EventListener.
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        if (strtolower($command->getName()) !== "smeltwand")
        {
            return true;
        }

        if (!$sender->hasPermission("swand.give"))
        {
            $sender->sendMessage("NO PERM !");
            return true;
        }
        if (!isset($args[0]))
        {
            return false;
        }
        $player = $this->getServer()->getPlayer($args[0]);
        if ($player == null)
        {
            $sender->sendMessage("Player Not Found !");
            return true;
        }
        $item = Item::get(Item::STICK, 0, 1);
        $item->setCustomName("Smelt Stick\nTap a chest to smelt items !");
        if (!$player->getInventory()->canAddItem($item))
        {
            $sender->sendMessage($player->getName()."'s inventory is full");
            return true;
            if ($player instanceof )
        }
        $player->getInventory()->addItem($item);
        return true;
    }

    public function onTap(PlayerInteractEvent $event)
    {
        $player = $event->getPlayer();
        $block = $event->getBlock();
        $item = $event->getItem();
        $x = $block->getX();
        $y = $block->getY();
        $z = $block->getZ();
        $level = $block->getLevel();

        if ($item->getCustomName() !== "Smelt Stick\nTap a chest to smelt items !")
        {
            return;
        }
        $title =  $level->getTile(new Vector3($x, $y, $z));
        if ($title instanceof Chest)
        {
            $inv = $title->getInventory();
            $items = $inv->getContents();
            foreach ($items as $item)
            {
                switch ($item->getId())
                {
                    //TODO: VANILLA SMELT RECIPE
                    case 4:
                        $smelt = Item::get(Item::STONE, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::IRON_ORE:
                        $smelt = Item::get(Item::IRON_INGOT, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::GOLD_ORE:
                        $smelt = Item::get(Item::GOLD_INGOT, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::DIAMOND_ORE:
                        $smelt = Item::get(Item::DIAMOND, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::LAPIS_ORE:
                        $smelt = Item::get(Item::DYE, 4, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::COAL_ORE:
                        $smelt = Item::get(Item::COAL, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::EMERALD_ORE:
                        $smelt = Item::get(Item::EMERALD, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::QUARTZ_ORE:
                        $smelt = Item::get(Item::QUARTZ, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::REDSTONE_ORE:
                        $smelt = Item::get(Item::REDSTONE, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::LOG:
                        $smelt = Item::get(Item::COAL, 1, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::LOG2:
                        $smelt = Item::get(Item::COAL, 1, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::BEEF:
                        $smelt = Item::get(Item::COOKED_BEEF, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::CHICKEN:
                        $smelt = Item::get(Item::COOKED_CHICKEN, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::FISH:
                        $smelt = Item::get(Item::COOKED_FISH, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::SALMON:
                        $smelt = Item::get(Item::COOKED_SALMON, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::RABBIT:
                        $smelt = Item::get(Item::COOKED_RABBIT, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::MUTTON:
                        $smelt = Item::get(Item::COOKED_MUTTON, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::PORKCHOP:
                        $smelt = Item::get(Item::COOKED_PORKCHOP, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::POTATO:
                        $smelt = Item::get(Item::BAKED_POTATO, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::KELP:
                        $smelt = Item::get(Item::DRIED_KELP, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::SAND:
                        $smelt = Item::get(Item::GLASS, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::STONE:
                        $smelt = Item::get(-183, 0, $item->getCount() * 3);
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                        break;
                    case Item::NETHERRACK:
                        $smelt = Item::get(Item::NETHER_BRICK, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                    case Item::CLAY:
                        $smelt = Item::get(Item::BRICK, 0, $item->getCount());
                        $inv->removeItem($item);
                        $inv->addItem($smelt);
                }
            }
            $player->sendMessage("Smelted !");
        }
    }
}
